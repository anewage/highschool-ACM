<?php

namespace App\Http\Controllers;

use App\Record;
use Illuminate\Http\Request;
use SoapClient;
use DB;

class RegisterController extends Controller
{

    var $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function register()
    {
        $record = new Record($this->request->all());
        $record->save();
        $att = $record->getAttributes();
        return view('pages.payment', ['record' => $att]);
    }

    public function store(){
        $data = $this->request->all();
//        $record = $data['record'];
//        $string = implode(null,$record);
//        $json = json_decode($string, true);

        $API = $data['api'];
        $Amount = $data['price'];
        $Authority = $data['payment_id'];
        if(strlen($Authority) > 4){
            $client = new SoapClient("http://parsianpal.com/WebService/WebService.asmx?wsdl");
            $params = array('API' => $API , 'Amount' => $Amount, 'InvoiceId' => $Authority);
            $res = $client->verifypayment($params);
            $Result = $res->verifypaymentResult;
            if($Result == 1){
                DB::update('update registeredteams set payment_id = ? where id = ?', [$data['payment_id'],$data['id']]);
                return view('pages.finished', ['record' => $data]);
            } else {
                return view('pages.try_again' , ['data' => $data]);
            }

        } else {
            return view('pages.error');
        }
    }

    public function getPaymentID () {

        $data = $this->request->all();

        $API = $data['api'];
        $Amount = $data['price'];
        $Description = $data['description'];
        $CallbackURL = $data['callback'];
        $OrderId = $data['id'];

        $client = new SoapClient("http://parsianpal.com/WebService/WebService.asmx?wsdl");
        $params = array('API' => $API , 'Amount' => $Amount, 'CallBack' => $CallbackURL, 'OrderId' => $OrderId, 'Text' => $Description);
        $res = $client->requestpayment($params);
        $paymentID = $res->requestpaymentResult;
        if(strlen($paymentID) == 8) {
            return view('pages.payment_redirect', ['record' => $data, 'paymentID' => $paymentID]);
        } else {
            return view('pages.error');
        }
    }
}
