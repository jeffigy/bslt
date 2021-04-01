@extends('layouts.admin')
@section('content')

<div class="card">
        <div class="card-header">
          Contract Details
        </div>
        <div class="row justify-content-center">
            <div class="container-fluid">
                <div class="card-body">
                    <button class="btn btn-danger" >
                        <a href="/contracts/pendings" class="" style="color:#ffffff;">Back</a>
                    </button>
                    </form>
                    <button class="btn btn-success float-right" style="margin-right:5px;">
                        <a href="{{ url('dynamic_pdf/pdf') }}" style="color: #ffffff">Generate PDF</a>
                    </button>
                    <form action="" method="post">
                          <h1 align="center" style="font-weight:bold;">BAGUIO STEEL LINE TRADING</h1>
                          <h6 align="center">2-A Mt. Apo corner Arellano St, Davao City</h6>
                          <h6 align="center">Telefax No.(082) 300-4675 * Email: baguiosteel_line@yahoo.com</h6>
                        <hr style="height: 5px; background: black;">
                        <h4 align="center" style="font-weight:bold;">SALES QUOTATION</h4>
                        <div class="form-row">
                            
                            <label for="colFormLabel" class="col-sm-2 col-form-label text-sm-right" >To:</label>
                            <div class="col-sm-4">
                                <input type="text" style="border" class="form-control control" value="{{$onGoingContracts->to}}" readonly>
                            </div>

                            <label for="colFormLabel" class="col-sm-2 col-form-label text-sm-right" >Date:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control control" id="datepicker" style="pointer-events:none" tabindex="-1" name="date" value="{{$onGoingContracts->date}}" readonly >
                            </div>

                            <label for="colFormLabel" class="col-sm-2 col-form-label text-sm-right" >Address:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control control" id="colFormLabel" " value="{{$onGoingContracts->address}}" readonly>
                            </div>

                            <label for="colFormLabel" class="col-sm-2 col-form-label text-sm-right">Reference:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control control" id="colFormLabel" " name="reference" value="{{$onGoingContracts->reference}}" readonly>
                            </div>

                            <label for="colFormLabel" class="col-sm-2 col-form-label text-sm-right">Attention:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control control" id="colFormLabel" " name="attention" value="{{$onGoingContracts->attention}}" readonly>
                            </div>

                            <label for="colFormLabel" class="col-sm-2 col-form-label text-sm-right">Area:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control control" id="colFormLabel" " name="area" value="{{$onGoingContracts->area}}" readonly>
                            </div>

                            <label for="colFormLabel" class="col-sm-2 col-form-label text-sm-right ">Project:</label>
                            <div class="col-sm-4 ">
                                <input type="text" class="form-control control" id="colFormLabel" " name="project" value="{{$onGoingContracts->project}}" readonly>
                            </div>

                            <label for="colFormLabel" class="col-sm-2 col-form-label text-sm-right">Salesman:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control control" id="colFormLabel" " name="salesman" value="{{$onGoingContracts->salesman}}" readonly>
                            </div>

                            <label for="colFormLabel" class="col-sm-2 col-form-label text-sm-right">Location:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control control" id="colFormLabel" " name="location" value="{{$onGoingContracts->location}}" readonly>
                            </div>
                           
                            @csrf
                        </div>
                        <hr style="height: 5px; background: black;">
                        
                        <div class="content-header">
                        </div>
                        <div class="form-row">
                          <label for="colFormLabel" class="col-sm-2 col-form-label text-sm-right">A.</label>
                          <div class="col-sm-4">
                            <input name="titleA" type="text" class="form-control" value="{{$onGoingContracts->titleA}}" readonly>
                            </div>
                          </div>
                        
                        
                        <table class="table table-responsive">
                          <thead>
                          
                            <tr>
                              <th>Quantity</th>
                              <th>Unit</th>
                              <th>Dimension</th>
                              <th>Price/Unit</th>
                              <th>Total</th>
                            </tr>
                          </thead>
                          <tbody row-container>
                            <!--1st Row-->
                            <tr>
                              <!--Quantity-->
                              <td>
                                  <div class="input-group">
                                    <input type="text" name="quantity1" class="form-control input-sm  amount1" Quantity" value="{{$onGoingContracts->quantity1}}" readonly>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                          PCS
                                        </div>
                                    </div>
                                  </div>

                              </td>
                              <!--Unit-->
                              <td>
                                  <input type="text" name="unit1" class="form-control input-sm  " Item Name" value="{{$onGoingContracts->unit1}}" readonly>
                              </td>

                              <!--Dimension-->
                              <td>
                                  <input type="text" name="dimension1" class="form-control input-sm " Dimension" value="{{$onGoingContracts->dimension1}}" readonly>
                              </td>

                              <!--Price/Unit-->
                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input type="text" name="price1" class="form-control input-sm  amount1" Price/Unit" value="{{$onGoingContracts->price1}}" readonly>
                                  </div>
                              </td>

                              <!--total-->
                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input name="total1" type="text" class="form-control input-sm  total" id="total_amount1" value="{{$onGoingContracts->total1}}" readonly>
                                  </div>
                              </td>
                            </tr>
                            <!--2nd Row-->
                            <tr>
                              <!--Quantity-->
                              <td>
                                  <div class="input-group">
                                    <input type="text" name="quantity2" class="form-control input-sm  amount2" Quantity" value="{{$onGoingContracts->quantity2}}" readonly>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                          PCS
                                        </div>
                                    </div>
                                  </div>
                              </td>
                              <!--Unit-->
                              <td> <input type="text" name="unit2" class="form-control input-sm  " Item Name" value="{{$onGoingContracts->unit2}}" readonly> </td>
                              <!--Dimension-->
                              <td> <input type="text" name="dimension2" class="form-control input-sm " Dimension" value="{{$onGoingContracts->dimension2}}" readonly> </td>
                              <!--Price/Unit-->
                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input type="text" name="price2" class="form-control input-sm  amount2" Price/Unit" value="{{$onGoingContracts->price2}}" readonly>
                                  </div>
                              </td>
                              <!--total-->

                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input name="total2" type="text" class="form-control input-sm  total" id="total_amount2" value="{{$onGoingContracts->total2}}" readonly>
                                  </div>
                              </td>
                            </tr>
                            <!--3rd Row-->
                            <tr>
                              <!--Quantity-->
                              <td>
                                  <div class="input-group">
                                    <input type="text" name="quantity3" class="form-control input-sm  amount3" Quantity" value="{{$onGoingContracts->quantity3}}" readonly>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                          PCS
                                        </div>
                                    </div>
                                  </div>
                              </td>
                              <!--Unit-->
                              <td> <input type="text" name="unit3" class="form-control input-sm  " Item Name" value="{{$onGoingContracts->unit3}}" readonly> </td>
                              <!--Dimension-->
                              <td> <input type="text" name="dimension3" class="form-control input-sm " Dimension" value="{{$onGoingContracts->dimension3}}" readonly> </td>
                              <!--Price/Unit-->
                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input type="text" name="price3" class="form-control input-sm  amount3" Price/Unit" value="{{$onGoingContracts->price3}}" readonly>
                                  </div>
                              </td>
                              <!--total-->

                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input name="total3" type="text" class="form-control input-sm  total" id="total_amount3" value="{{$onGoingContracts->total3}}" readonly>
                                  </div>
                              </td>
                            </tr>
                            <!--4th Row-->
                            <tr>
                              <!--Quantity-->
                              <td>
                                  <div class="input-group">
                                    <input type="text" name="quantity4" class="form-control input-sm  amount4" Quantity" value="{{$onGoingContracts->quantity4}}" readonly>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                          PCS
                                        </div>
                                    </div>
                                  </div>
                              </td>
                              <!--Unit-->
                              <td> <input type="text" name="unit4" class="form-control input-sm  " Item Name" value="{{$onGoingContracts->unit4}}" readonly> </td>
                              <!--Dimension-->
                              <td> <input type="text" name="dimension4" class="form-control input-sm " Dimension" value="{{$onGoingContracts->dimension4}}" readonly> </td>
                              <!--Price/Unit-->
                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input type="text" name="price4" class="form-control input-sm  amount4" Price/Unit" value="{{$onGoingContracts->price4}}" readonly>
                                  </div>
                              </td>
                              <!--total-->

                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input name="total4" type="text" class="form-control input-sm  total" id="total_amount4" value="{{$onGoingContracts->total4}}" readonly>
                                  </div>
                              </td>
                            </tr>
                            <!--5th Row-->
                            <tr>
                              <!--Quantity-->
                              <td>
                                  <div class="input-group">
                                    <input type="text" name="quantity4" class="form-control input-sm  amount5" Quantity" value="{{$onGoingContracts->quantity5}}" readonly>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                          PCS
                                        </div>
                                    </div>
                                  </div>
                              </td>
                              <!--Unit-->
                              <td> <input type="text" name="unit5" class="form-control input-sm  " Item Name" value="{{$onGoingContracts->unit5}}" readonly> </td>
                              <!--Dimension-->
                              <td> <input type="text" name="dimension5" class="form-control input-sm " Dimension" value="{{$onGoingContracts->dimension5}}" readonly> </td>
                              <!--Price/Unit-->
                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input type="text" name="price5" class="form-control input-sm  amount5" Price/Unit" value="{{$onGoingContracts->price5}}" readonly>
                                  </div>
                              </td>
                              <!--total-->

                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input name="total5" type="text" class="form-control input-sm  total" id="total_amount5" value="{{$onGoingContracts->total5}}" readonly>
                                  </div>
                              </td>
                            </tr>
                            <!--Total-->
                            <tr>
                              <td colspan="3"></td>
                              <td><label for="">Total:</label></td>
                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input name="list" type="text" class="form-control input-sm  control-1" id="grand_total"value="{{$onGoingContracts->list}}" readonly>
                                  </div>
                              </td>
                            </tr>
                            <!--Discount Rate-->
                            <tr>
                              <td colspan="3"></td>
                              <td><label for="">Discount Rate:</label></td>
                              <td>
                                <div class="input-group">
                                
                                  <input name="disc" type="text" min="0" max="100" class="form-control input-sm discount " id="" value="{{$onGoingContracts->disc}}">
                                  <div class="input-group-append">
                                    <div class="input-group-text">%</div>  
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <!--Total + discount Rate-->
                            <tr>
                              <td colspan="3"></td>
                              <td><label for="">Total + Discount Rate</label></td>
                              <td>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text">₱</div>  
                                  </div>
                                  <input name="sale" type="text" class="form-control input-sm  total2 control-1" id="less" value="{{$onGoingContracts->sale}}" readonly>
                                  
                                </div>
                              </td>
                            </tr>





                            <!--spacing-->
                            <tr>
                              <td colspan="5"></td>
                            </tr>
                            <!--B. hardware Accessories-->
                            <tr>
                              <td><label for="" class="">B.</label></td>
                              <td><label for="">Hardware Accessories</label></td>
                              <td colspan="3"></td>
                            </tr>
                            <!--6th Row-->
                            <tr>
                              <!--Quantity-->
                              <td>
                                  <div class="input-group">
                                    <input type="text" name="quantity6" class="form-control input-sm  amount6" Quantity" value="{{$onGoingContracts->quantity6}}" readonly>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                          PCS
                                        </div>
                                    </div>
                                  </div>

                              </td>
                              <!--Unit-->
                              <td>
                                  <input type="text" name="unit6" class="form-control input-sm  " Item Name" value="{{$onGoingContracts->unit6}}" readonly>
                              </td>

                              <!--Dimension-->
                              <td>
                                  
                              </td>

                              <!--Price/Unit-->
                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input type="text" name="price6" class="form-control input-sm  amount6" Price/Unit" value="{{$onGoingContracts->price6}}" readonly>
                                  </div>
                              </td>

                              <!--total-->
                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input name="total6" type="text" class="form-control input-sm  total1" id="total_amount6" value="{{$onGoingContracts->total6}}" readonly>
                                  </div>
                              </td>
                            </tr>
                            <!--7th Row-->
                            <tr>
                              <!--Quantity-->
                              <td>
                                  <div class="input-group">
                                    <input type="text" name="quantity7" class="form-control input-sm  amount7" Quantity" value="{{$onGoingContracts->quantity7}}" readonly>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                          PCS
                                        </div>
                                    </div>
                                  </div>
                              </td>
                              <!--Unit-->
                              <td> <input type="text" name="unit7" class="form-control input-sm  " Item Name" value="{{$onGoingContracts->unit7}}" readonly> </td>
                              <!--Dimension-->
                              <td></td>
                              <!--Price/Unit-->
                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input type="text" name="price7" class="form-control input-sm  amount7" Price/Unit" value="{{$onGoingContracts->price7}}" readonly>
                                  </div>
                              </td>
                              <!--total-->

                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input name="total7" type="text" class="form-control input-sm  total1" id="total_amount7" value="{{$onGoingContracts->total7}}" readonly>
                                  </div>
                              </td>
                            </tr>
                            <!--8th Row-->
                            <tr>
                              <!--Quantity-->
                              <td>
                                  <div class="input-group">
                                    <input type="text" name="quantity8" class="form-control input-sm  amount8" Quantity" value="{{$onGoingContracts->quantity8}}" readonly>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                          PCS
                                        </div>
                                    </div>
                                  </div>
                              </td>
                              <!--Unit-->
                              <td> <input type="text" name="unit8" class="form-control input-sm  " Item Name" value="{{$onGoingContracts->unit8}}" readonly> </td>
                              <!--Dimension-->
                              <td> </td>
                              <!--Price/Unit-->
                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input type="text" name="price8" class="form-control input-sm  amount8" Price/Unit" value="{{$onGoingContracts->price8}}" readonly>
                                  </div>
                              </td>
                              <!--total-->

                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input name="total8" type="text" class="form-control input-sm  total1" id="total_amount8" value="{{$onGoingContracts->total8}}" readonly>
                                  </div>
                              </td>
                            </tr>
                            <!--9th Row-->
                            <tr>
                              <!--Quantity-->
                              <td>
                                  <div class="input-group">
                                    <input type="text" name="quantity9" class="form-control input-sm  amount9" Quantity" value="{{$onGoingContracts->quantity9}}" readonly>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                          PCS
                                        </div>
                                    </div>
                                  </div>
                              </td>
                              <!--Unit-->
                              <td> <input type="text" name="unit9" class="form-control input-sm  " Item Name" value="{{$onGoingContracts->unit9}}" readonly> </td>
                              <!--Dimension-->
                              <td></td>
                              <!--Price/Unit-->
                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input type="text" name="price9" class="form-control input-sm  amount9" Price/Unit" value="{{$onGoingContracts->price9}}" readonly>
                                  </div>
                              </td>
                              <!--total-->

                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input name="total9" type="text" class="form-control input-sm  total1" id="total_amount9" value="{{$onGoingContracts->total9}}" readonly>
                                  </div>
                              </td>
                            </tr>
                            <!--10th Row-->
                            <tr>
                              <!--Quantity-->
                              <td>
                                  <div class="input-group">
                                    <input type="text" name="quantity10" class="form-control input-sm  amount10" Quantity" value="{{$onGoingContracts->qunatity10}}" readonly>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                          PCS
                                        </div>
                                    </div>
                                  </div>
                              </td>
                              <!--Unit-->
                              <td> <input type="text" name="unit10" class="form-control input-sm  " Item Name" value="{{$onGoingContracts->unit10}}" readonly> </td>
                              <!--Dimension-->
                              <td></td>
                              <!--Price/Unit-->
                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input type="text" name="price10" class="form-control input-sm  amount10" Price/Unit" value="{{$onGoingContracts->price10}}" readonly>
                                  </div>
                              </td>
                              <!--total-->

                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input name="total10" type="text" class="form-control input-sm  total1" id="total_amount10" value="{{$onGoingContracts->total10}}" readonly>
                                  </div>
                              </td>
                            </tr>
                            <!--Grand Total-->
                            <tr>
                              <td colspan="3"></td>
                              <td><label for="">Total:</label></td>
                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input name="list1" type="text" class="form-control input-sm  total2 control-1" id="grand_total1" value="{{$onGoingContracts->list1}}" readonly>
                                  </div>
                              </td>
                            </tr>





                            <!--spacing-->
                            <tr>
                              <td colspan="5"></td>
                            </tr>                            
                            <!--C. Delivery Charge-->
                            <tr>
                              <td><label for="" class="">C.</label></td>
                              <td><label for="">Delivery Charge</label></td>
                              <td colspan="3"></td>
                            </tr>
                            <!--Delivery Fee-->
                            <tr>
                              <td colspan="3"></td>
                              <td>
                                <label>Delivery Fee:</label>
                              </td>
                              <td>
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text">
                                      ₱
                                    </div>
                                  </div>
                                  <input name="del" type="text" class="form-control input-sm  total2" value="{{$onGoingContracts->del}}" readonly>
                                </div>
                              </td>
                            </tr>
                            <!--Lumpsum Proposal-->
                            <tr>
                              <td colspan="3"></td>
                              <td class="control-control"><label for="" >Lumpsum Proposal:</label></td>
                              <td class="control-control">
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input name="list2" type="text" class="form-control input-sm  control-control" id="grand_total2" value="{{$onGoingContracts->list2}}" readonly>
                                  </div>
                              </td>
                            </tr>

                          </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>

<style>
  .table td, .table th{
  border-top: none !important;
  border-bottom: none !important;
}
.form-control {
    border: 0 !important;
    background-color:white  !important;
    border-radius:0px  !important;
}
.input-group-append, .input-group-prepend, .input-group-text{
  border: 0 !important;
  background-color:white  !important;
    border-radius:0px  !important;
}
.control{
  border-bottom: 1px solid !important;
}
.control-1{
  border-top: 1px solid !important;
}
.control-control{
  border-bottom: 1px solid !important;
  border-top: 1px solid !important;
}

</style>
@endsection
