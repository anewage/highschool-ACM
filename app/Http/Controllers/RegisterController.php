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
//        $this->validate($this->request,[
//            'teamName' => 'required|alpha_num',
//            'highschool' => 'required|alpha_num',
//            'p1Name' => 'required|alpha_num',
//            'p2Name' => 'required|alpha_num',
//            'p3Name' => 'required|alpha_num',
//            'coachName' => 'required|alpha_num',
//            'coachMail' => 'required|alpha_num',
//            'coachPhone' => 'required|alpha_num'
//        ]);

        $record = new Record($this->request->all());
        $att = $record->getAttributes();
        if (
            ($att['teamName'] != null || $att['teamName'] != "") &&
            ($att['highschool'] != null || $att['highschool'] != "") &&
            ($att['p1Name'] != null || $att['p1Name'] != "") &&
            ($att['p2Name'] != null || $att['p2Name'] != "") &&
            ($att['p3Name'] != null || $att['p3Name'] != "") &&
            ($att['coachName'] != null || $att['coachName'] != "") &&
            ($att['coachPhone'] != null || $att['coachPhone'] != "") &&
            ($att['coachMail'] != null || $att['coachMail'] != "")
        ) {
            $record->save();
        } else {
            return view('pages.error');
        }
        $att = $record->getAttributes();

//        $API = '31148-pejlc-46554-18340-gpgc51w6godpiehsd376177687';
//        $Amount = 900000;
//        $Description = 'هزینه شرکت در مسابقه برنامه‌نویسی دانش‌اموزی دانشگاه امیرکبیر';
//        $CallbackURL = 'http://highschool.icpc.aut.ac.ir/payment_done?id='.$att['id'];
//        $OrderId = $att['id'];
//
//        $client = new SoapClient("http://parsianpal.com/WebService/WebService.asmx?wsdl");
//        $params = array('API' => $API , 'Amount' => $Amount, 'CallBack' => $CallbackURL, 'OrderId' => $OrderId, 'Text' => $Description);
//        $res = $client->requestpayment($params);
//        $paymentID = $res->requestpaymentResult;
//        if(strlen($paymentID) == 8) {
            return view('pages.finished', ['record' => $att]);
//        } else {
//            return view('pages.error');
//        }
    }

    public function store(){
        $data = $this->request->all();

        $id = $data['id'];
        $paymentID = $data['paymentID'];

        DB::update('update registeredteams set payment_id = ? where id = ?', [$paymentID, $id]);

//        $API = $data['api'];
//        $Amount = $data['price'];
//        $Authority = $data['payment_id'];
//        if(strlen($Authority) > 4){
//            $client = new SoapClient("http://parsianpal.com/WebService/WebService.asmx?wsdl");
//            $params = array('API' => $API , 'Amount' => $Amount, 'InvoiceId' => $Authority);
//            $res = $client->verifypayment($params);
//            $Result = $res->verifypaymentResult;
//                DB::update('update registeredteams set payment_id = ? where id = ?', [$data['payment_id'],$data['id']]);
//                return view('pages.finished', ['record' => $data, 'data' => $data]);
//
//        } else {
//            return view('pages.error');
//        }
    }

    public function paymentOK () {
        $data = $this->request->all();
        return view('pages.payment_done', ['OrderID' => $data['id']]);
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
//            return view('pages.payment_redirect', ['record' => $data, 'paymentID' => $paymentID]);
            DB::update('update registeredteams set payment_id = ? where id = ?', [$data['payment_id'],$data['id']]);
            return view('pages.finished', ['record' => $data, 'data' => $paymentID]);
        } else {
            return view('pages.error');
        }
    }
}
