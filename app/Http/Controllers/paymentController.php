<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;
class paymentController extends Controller
{
  public function stripe()
     {
         return view('stripe');
     }

     /**
      * success response method.
      *
      * @return \Illuminate\Http\Response
      */
     public function stripePost(Request $request)
     {
      //   Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
      //   Stripe\Charge::create ([
      //           "amount" => 100 * 100,
      //           "currency" => "usd",
      //           "source" => $request->stripeToken,
      //           "description" => "Test payment from itsolutionstuff.com."
      //   ]);

      //   Session::flash('success', 'Payment successful!');

      //   return back();



return $request->val;
$impold=implode (',',$request->val );
$expold=explode (',',$impold );
return $expold;
    //  return expolde(()  ;
     }
 }
