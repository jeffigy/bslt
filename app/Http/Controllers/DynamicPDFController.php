<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class DynamicPDFController extends Controller
{
    function index()
    {
     $customer_data = $this->get_customer_data();
     return view('dynamic_pdf')->with('customer_data', $customer_data);
    }

    function get_customer_data()
    {
     $customer_data = DB::table('contracts')
         ->limit(1)
         ->get();
     return $customer_data;
    }

    function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML($this->convert_customer_data_to_html());
     return $pdf->stream();
    }

    function convert_customer_data_to_html()
    {
     $customer_data = $this->get_customer_data();
     $output = '';  
     foreach($customer_data as $customer)
     {
      $output .= '
      <h2 align="center" style="margin:0;">BAGUIO STEEL LINE TRADING</h2>
     <h6 align="center" style="margin:0;">2-A Mt. Apo corner Arellano St, Davao City</h6>
     <h6 align="center" style="margin:0;">Telefax No.(082) 300-4675 * Email: baguiosteel_line@yahoo.com</h6>
     <hr style="height: 5px; background: black;">
     <h4 align="center" style="margin:0;">SALES QUOTATION</h4>

    <label align="center">To:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
    <input type="text" size="25" style="border:none; border-bottom:1px solid;" value="'.$customer->to.'">

    <label>Date:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" size="20" style="border:none; border-bottom:1px solid;" value="'.$customer->date.'">
    
    <br>

    <label>Address:</label>&nbsp;&nbsp;
    <input type="text" size="25" style="border:none; border-bottom:1px solid;" value="'.$customer->address.'">
        
    <label>Reference:</label>
    <input type="text" size="20" style="border:none; border-bottom:1px solid;" value="'.$customer->reference.'">
    
    <br>

    <label>Attention:</label>
    <input type="text" size="25" style="border:none; border-bottom:1px solid;" value="'.$customer->attention.'">
    
    <label>Area:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" size="20" style="border:none; border-bottom:1px solid;" value="'.$customer->area.'">
    
    <br>

    <label>Project:</label>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" size="25" style="border:none; border-bottom:1px solid;" value="'.$customer->project.'">
    
    <label>Salesman:</label>
    <input type="text" size="20" style="border:none; border-bottom:1px solid;" value="'.$customer->salesman.'">

    <br>

    <label>Location:</label>&nbsp;
    <input type="text" size="25" style="border:none; border-bottom:1px solid;" value="'.$customer->location.'">

    <hr style="height: 5px; background: black;">
     
    <table width="100%" style="border-collapse: collapse; border:0px;">
      <tr>
    <th  width="10%">QUANTITY</th>
    <th  width="23.34%">UNIT</th>
    <th  width="16.67%">DIMENSION</th>
    <th  width="16.67%">PRICE/UNIT</th>
    <th  width="16.67%">TOTAL</th>
   </tr>

      <tr>
        <td><label class="" style="font-weight:bold;">A.</label></td>
        <td><label style="font-weight:bold;">'.$customer->titleA.'</label></td>
        <td colspan="3"></td>
      </tr>
      <tr>
        <td colspan="5" style="padding: 8px;"></td>
      </tr>
      <tr>
        <td >'.$customer->quantity1.'</td>
        <td >'.$customer->unit1.'</td>
        <td >'.$customer->dimension1.'</td>
        <td >'.$customer->price1.'</td>
        <td >'.$customer->total1.'</td>
      </tr>
      <tr>
        <td >'.$customer->quantity2.'</td>
        <td >'.$customer->unit2.'</td>
        <td >'.$customer->dimension2.'</td>
        <td >'.$customer->price2.'</td>
        <td >'.$customer->total2.'</td>
      </tr>
      <tr>
        <td >'.$customer->quantity3.'</td>
        <td >'.$customer->unit3.'</td>
        <td >'.$customer->dimension3.'</td>
        <td >'.$customer->price3.'</td>
        <td >'.$customer->total3.'</td>
      </tr>
      <tr>
        <td >'.$customer->quantity4.'</td>
        <td >'.$customer->unit4.'</td>
        <td >'.$customer->dimension4.'</td>
        <td >'.$customer->price4.'</td>
        <td >'.$customer->total4.'</td>
      </tr>
      <tr>
        <td >'.$customer->quantity5.'</td>
        <td >'.$customer->unit5.'</td>
        <td >'.$customer->dimension5.'</td>
        <td >'.$customer->price5.'</td>
        <td >'.$customer->total5.'</td>
      </tr>
      <tr>
        <td colspan="3"></td>
        <td >
          <label for="">Total:</label>
        </td>
        <td style="border-top:1px solid;">'.$customer->list.'</td>
      </tr>
      <tr>
        <td colspan="3"></td>
        <td >
          <label for="">Discount Rate:</label>
        </td>
        <td >'.$customer->disc.'</td>
      </tr>
      <tr>
        <td colspan="3"></td>
        <td >
          <label for="">Total + Discount Rate:</label>
        </td>
        <td >'.$customer->sale.'</td>
      </tr>
      <tr>
        <td colspan="5" style="padding: 8px;"></td>
      </tr>
      <tr>
        <td><label style="font-weight:bold;" class="">B.</label></td>
        <td><label style="font-weight:bold;">Hardware Accessories</label></td>
        <td colspan="3"></td>
      </tr>
      <tr>
        <td >'.$customer->quantity6.'</td>
        <td >'.$customer->unit6.'</td>
        <td ></td>
        <td >'.$customer->price6.'</td>
        <td >'.$customer->total6.'</td>
      </tr>
      <tr>
        <td >'.$customer->quantity7.'</td>
        <td >'.$customer->unit7.'</td>
        <td ></td>
        <td >'.$customer->price7.'</td>
        <td >'.$customer->total7.'</td>
      </tr>
      <tr>
        <td >'.$customer->quantity8.'</td>
        <td >'.$customer->unit8.'</td>
        <td ></td>
        <td >'.$customer->price8.'</td>
        <td >'.$customer->total8.'</td>
      </tr>
      <tr>
        <td >'.$customer->quantity9.'</td>
        <td >'.$customer->unit9.'</td>
        <td ></td>
        <td >'.$customer->price9.'</td>
        <td >'.$customer->total9.'</td>
      </tr>
      <tr>
        <td >'.$customer->quantity10.'</td>
        <td >'.$customer->unit10.'</td>
        <td ></td>
        <td >'.$customer->price10.'</td>
        <td >'.$customer->total10.'</td>
      </tr>
      <tr>
        <td colspan="3"></td>
        <td >
          <label for="">Total:</label>
        </td>
        <td style="border-top:1px solid;">'.$customer->list1.'</td>
      </tr>
      <tr>
        <td colspan="5" style="padding: 8px;"></td>
      </tr>
      <tr>
        <td><label style="font-weight:bold;" class="">C.</label></td>
        <td><label style="font-weight:bold;">Delivery Charge</label></td>
        <td colspan="3"></td>
      </tr>
      <tr>
        <td colspan="3"></td>
        <td >
          <label for="">Delivery Fee:</label>
        </td>
        <td >'.$customer->del.'</td>
      </tr>
      <tr>
        <td colspan="5" style="padding: 8px;"></td>
      </tr>
      <tr>
        <td colspan="3"></td>
        <td style="border-top:3px solid; border-bottom:3px solid;">
          <label >Lumpsum Proposal:</label>
        </td>
        <td style="border-top:3px solid; border-bottom:3px solid;">'.$customer->list2.'</td>
      </tr>
      ';
     }
     $output .= '</table>';
     return $output;
    }
}
/*<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
  border-bottom: 1px solid #ddd;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>*/