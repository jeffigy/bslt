@extends('layouts.admin')

@section('content')
<div class="container">
<div class="card">

        <div class="row justify-content-center">
            <div class="container-fluid">
                <div class="card-body">
                <form action="/contracts/pendings/{{$pendingContract->id}}" method="post">
                @method('PATCH')
                        <div class="form-row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label text-sm-right" >To:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="colFormLabel" placeholder="" name="to" value="{{ $pendingContract->to}}">
                                @error('to') <p style="color: red;">{{$message}}</p>@enderror
                            </div>
                            <label for="colFormLabel" class="col-sm-2 col-form-label text-sm-right" >Date:</label>
                            
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="colFormLabel" placeholder="" name="date" value="{{ $pendingContract->date}}" readonly>
                                @error('date') <p style="color: red;">{{$message}}</p>@enderror
                            </div>
                            
                            <label for="colFormLabel" class="col-sm-2 col-form-label text-sm-right" >Address:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="colFormLabel" placeholder="" name="address" value="{{ $pendingContract->address}}">
                                @error('address') <p style="color: red;">{{$message}}</p>@enderror
                            </div>
                            <label for="colFormLabel" class="col-sm-2 col-form-label text-sm-right">Reference:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="colFormLabel" placeholder="" name="reference" value="{{ $pendingContract->reference}}">
                                @error('reference') <p style="color: red;">{{$message}}</p>@enderror
                            </div>
                            <label for="colFormLabel" class="col-sm-2 col-form-label text-sm-right">Attention:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="colFormLabel" placeholder="" name="attention" value="{{ $pendingContract->attention}}">
                                @error('attention') <p style="color: red;">{{$message}}</p>@enderror
                            </div>
                            <label for="colFormLabel" class="col-sm-2 col-form-label text-sm-right">Area:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="colFormLabel" placeholder="" name="area" value="{{ $pendingContract->area}}">
                                @error('area') <p style="color: red;">{{$message}}</p>@enderror
                            </div>
                            <label for="colFormLabel" class="col-sm-2 col-form-label text-sm-right ">Project:</label>
                            <div class="col-sm-4 ">
                                <input type="text" class="form-control" id="colFormLabel" placeholder="" name="project" value="{{ $pendingContract->project}}">
                                @error('project') <p style="color: red;">{{$message}}</p>@enderror
                            </div>
                            <label for="colFormLabel" class="col-sm-2 col-form-label text-sm-right">Salesman:</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="colFormLabel" placeholder="" name="salesman" value="{{ $pendingContract->salesman}}">
                                @error('salesman') <p style="color: red;">{{$message}}</p>@enderror
                            </div>
                            <label for="colFormLabel" class="col-sm-2 col-form-label text-sm-right">Location:</label>
                            <div class="col-sm-4">
                            <input type="text" class="form-control" id="colFormLabel" placeholder="" name="location" value="{{ $pendingContract->location}}">
                            @error('location') <p style="color: red;">{{$message}}</p>@enderror
                            </div>
                            
                            @csrf
                        </div>
                        
                               
                        <div class="content-header">
                        </div>
                        <div class="form-row">
                          <label for="colFormLabel" class="col-sm-2 col-form-label text-sm-right">A.</label>
                          <div class="col-sm-4">
                            <input name="titleA" type="text" class="form-control" value="{{$pendingContract->titleA}}" >
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
                                    <input type="text" name="quantity1" class="form-control input-sm text-right amount1" placeholder="Quantity" value="{{$pendingContract->quantity1}}" >
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                          PCS
                                        </div>
                                    </div>
                                  </div>

                              </td>
                              <!--Unit-->
                              <td>
                                  <input type="text" name="unit1" class="form-control input-sm text-right " placeholder="Item Name" value="{{$pendingContract->unit1}}" >
                              </td>

                              <!--Dimension-->
                              <td>
                                  <input type="text" name="dimension1" class="form-control input-sm text-right" placeholder="Dimension" value="{{$pendingContract->dimension1}}" >
                              </td>

                              <!--Price/Unit-->
                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input type="text" name="price1" class="form-control input-sm text-right amount1" placeholder="Price/Unit" value="{{$pendingContract->price1}}" >
                                  </div>
                              </td>

                              <!--total-->
                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input name="total1" type="text" class="form-control input-sm text-right total" id="total_amount1" value="{{$pendingContract->total1}}" >
                                  </div>
                              </td>
                            </tr>
                            <!--2nd Row-->
                            <tr>
                              <!--Quantity-->
                              <td>
                                  <div class="input-group">
                                    <input type="text" name="quantity2" class="form-control input-sm text-right amount2" placeholder="Quantity" value="{{$pendingContract->quantity2}}" >
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                          PCS
                                        </div>
                                    </div>
                                  </div>
                              </td>
                              <!--Unit-->
                              <td> <input type="text" name="unit2" class="form-control input-sm text-right " placeholder="Item Name" value="{{$pendingContract->unit2}}" > </td>
                              <!--Dimension-->
                              <td> <input type="text" name="dimension2" class="form-control input-sm text-right" placeholder="Dimension" value="{{$pendingContract->dimension2}}" > </td>
                              <!--Price/Unit-->
                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input type="text" name="price2" class="form-control input-sm text-right amount2" placeholder="Price/Unit" value="{{$pendingContract->price2}}" >
                                  </div>
                              </td>
                              <!--total-->

                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input name="total2" type="text" class="form-control input-sm text-right total" id="total_amount2" value="{{$pendingContract->total2}}" >
                                  </div>
                              </td>
                            </tr>
                            <!--3rd Row-->
                            <tr>
                              <!--Quantity-->
                              <td>
                                  <div class="input-group">
                                    <input type="text" name="quantity3" class="form-control input-sm text-right amount3" placeholder="Quantity" value="{{$pendingContract->quantity3}}" >
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                          PCS
                                        </div>
                                    </div>
                                  </div>
                              </td>
                              <!--Unit-->
                              <td> <input type="text" name="unit3" class="form-control input-sm text-right " placeholder="Item Name" value="{{$pendingContract->unit3}}" > </td>
                              <!--Dimension-->
                              <td> <input type="text" name="dimension3" class="form-control input-sm text-right" placeholder="Dimension" value="{{$pendingContract->dimension3}}" > </td>
                              <!--Price/Unit-->
                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input type="text" name="price3" class="form-control input-sm text-right amount3" placeholder="Price/Unit" value="{{$pendingContract->price3}}" >
                                  </div>
                              </td>
                              <!--total-->

                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input name="total3" type="text" class="form-control input-sm text-right total" id="total_amount3" value="{{$pendingContract->total3}}" >
                                  </div>
                              </td>
                            </tr>
                            <!--4th Row-->
                            <tr>
                              <!--Quantity-->
                              <td>
                                  <div class="input-group">
                                    <input type="text" name="quantity4" class="form-control input-sm text-right amount4" placeholder="Quantity" value="{{$pendingContract->quantity4}}" >
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                          PCS
                                        </div>
                                    </div>
                                  </div>
                              </td>
                              <!--Unit-->
                              <td> <input type="text" name="unit4" class="form-control input-sm text-right " placeholder="Item Name" value="{{$pendingContract->unit4}}" > </td>
                              <!--Dimension-->
                              <td> <input type="text" name="dimension4" class="form-control input-sm text-right" placeholder="Dimension" value="{{$pendingContract->dimension4}}" > </td>
                              <!--Price/Unit-->
                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input type="text" name="price4" class="form-control input-sm text-right amount4" placeholder="Price/Unit" value="{{$pendingContract->price4}}" >
                                  </div>
                              </td>
                              <!--total-->

                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input name="total4" type="text" class="form-control input-sm text-right total" id="total_amount4" value="{{$pendingContract->total4}}" >
                                  </div>
                              </td>
                            </tr>
                            <!--5th Row-->
                            <tr>
                              <!--Quantity-->
                              <td>
                                  <div class="input-group">
                                    <input type="text" name="quantity4" class="form-control input-sm text-right amount5" placeholder="Quantity" value="{{$pendingContract->quantity5}}" >
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                          PCS
                                        </div>
                                    </div>
                                  </div>
                              </td>
                              <!--Unit-->
                              <td> <input type="text" name="unit5" class="form-control input-sm text-right " placeholder="Item Name" value="{{$pendingContract->unit5}}" > </td>
                              <!--Dimension-->
                              <td> <input type="text" name="dimension5" class="form-control input-sm text-right" placeholder="Dimension" value="{{$pendingContract->dimension5}}" > </td>
                              <!--Price/Unit-->
                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input type="text" name="price5" class="form-control input-sm text-right amount5" placeholder="Price/Unit" value="{{$pendingContract->price5}}" >
                                  </div>
                              </td>
                              <!--total-->

                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input name="total5" type="text" class="form-control input-sm text-right total" id="total_amount5" value="{{$pendingContract->total5}}" >
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
                                    <input name="list" type="text" class="form-control input-sm text-right" id="grand_total"value="{{$pendingContract->list}}" >
                                  </div>
                              </td>
                            </tr>
                            <!--Discount Rate-->
                            <tr>
                              <td colspan="3"></td>
                              <td><label for="">Discount Rate:</label></td>
                              <td>
                                <div class="input-group">
                                
                                  <input name="disc" type="number" min="0" max="100" class="form-control input-sm discount" id="">
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
                                  <input name="sale" type="text" class="form-control input-sm text-right total2" id="less" value="{{$pendingContract->sale}}" >
                                  
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
                                    <input type="text" name="quantity6" class="form-control input-sm text-right amount6" placeholder="Quantity" value="{{$pendingContract->quantity6}}" >
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                          PCS
                                        </div>
                                    </div>
                                  </div>

                              </td>
                              <!--Unit-->
                              <td>
                                  <input type="text" name="unit6" class="form-control input-sm text-right " placeholder="Item Name" value="{{$pendingContract->unit6}}" >
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
                                    <input type="text" name="price6" class="form-control input-sm text-right amount6" placeholder="Price/Unit" value="{{$pendingContract->price6}}" >
                                  </div>
                              </td>

                              <!--total-->
                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input name="total6" type="text" class="form-control input-sm text-right total1" id="total_amount6" value="{{$pendingContract->total6}}" >
                                  </div>
                              </td>
                            </tr>
                            <!--7th Row-->
                            <tr>
                              <!--Quantity-->
                              <td>
                                  <div class="input-group">
                                    <input type="text" name="quantity7" class="form-control input-sm text-right amount7" placeholder="Quantity" value="{{$pendingContract->quantity7}}" >
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                          PCS
                                        </div>
                                    </div>
                                  </div>
                              </td>
                              <!--Unit-->
                              <td> <input type="text" name="unit7" class="form-control input-sm text-right " placeholder="Item Name" value="{{$pendingContract->unit7}}" > </td>
                              <!--Dimension-->
                              <td></td>
                              <!--Price/Unit-->
                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input type="text" name="price7" class="form-control input-sm text-right amount7" placeholder="Price/Unit" value="{{$pendingContract->price7}}" >
                                  </div>
                              </td>
                              <!--total-->

                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input name="total7" type="text" class="form-control input-sm text-right total1" id="total_amount7" value="{{$pendingContract->total7}}" >
                                  </div>
                              </td>
                            </tr>
                            <!--8th Row-->
                            <tr>
                              <!--Quantity-->
                              <td>
                                  <div class="input-group">
                                    <input type="text" name="quantity8" class="form-control input-sm text-right amount8" placeholder="Quantity" value="{{$pendingContract->quantity8}}" >
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                          PCS
                                        </div>
                                    </div>
                                  </div>
                              </td>
                              <!--Unit-->
                              <td> <input type="text" name="unit8" class="form-control input-sm text-right " placeholder="Item Name" value="{{$pendingContract->unit8}}" > </td>
                              <!--Dimension-->
                              <td> </td>
                              <!--Price/Unit-->
                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input type="text" name="price8" class="form-control input-sm text-right amount8" placeholder="Price/Unit" value="{{$pendingContract->price8}}" >
                                  </div>
                              </td>
                              <!--total-->

                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input name="total8" type="text" class="form-control input-sm text-right total1" id="total_amount8" value="{{$pendingContract->total8}}" >
                                  </div>
                              </td>
                            </tr>
                            <!--9th Row-->
                            <tr>
                              <!--Quantity-->
                              <td>
                                  <div class="input-group">
                                    <input type="text" name="quantity9" class="form-control input-sm text-right amount9" placeholder="Quantity" value="{{$pendingContract->quantity9}}" >
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                          PCS
                                        </div>
                                    </div>
                                  </div>
                              </td>
                              <!--Unit-->
                              <td> <input type="text" name="unit9" class="form-control input-sm text-right " placeholder="Item Name" value="{{$pendingContract->unit9}}" > </td>
                              <!--Dimension-->
                              <td></td>
                              <!--Price/Unit-->
                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input type="text" name="price9" class="form-control input-sm text-right amount9" placeholder="Price/Unit" value="{{$pendingContract->price9}}" >
                                  </div>
                              </td>
                              <!--total-->

                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input name="total9" type="text" class="form-control input-sm text-right total1" id="total_amount9" value="{{$pendingContract->total9}}" >
                                  </div>
                              </td>
                            </tr>
                            <!--10th Row-->
                            <tr>
                              <!--Quantity-->
                              <td>
                                  <div class="input-group">
                                    <input type="text" name="quantity10" class="form-control input-sm text-right amount10" placeholder="Quantity" value="{{$pendingContract->qunatity10}}" >
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                          PCS
                                        </div>
                                    </div>
                                  </div>
                              </td>
                              <!--Unit-->
                              <td> <input type="text" name="unit10" class="form-control input-sm text-right " placeholder="Item Name" value="{{$pendingContract->unit10}}" > </td>
                              <!--Dimension-->
                              <td></td>
                              <!--Price/Unit-->
                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input type="text" name="price10" class="form-control input-sm text-right amount10" placeholder="Price/Unit" value="{{$pendingContract->price10}}" >
                                  </div>
                              </td>
                              <!--total-->

                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input name="total10" type="text" class="form-control input-sm text-right total1" id="total_amount10" value="{{$pendingContract->total10}}" >
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
                                    <input name="list1" type="text" class="form-control input-sm text-right total2" id="grand_total1" value="{{$pendingContract->list1}}" >
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
                                  <input name="del" type="text" class="form-control input-sm text-right total2" value="{{$pendingContract->del}}" >
                                </div>
                              </td>
                            </tr>
                            <!--Lumpsum Proposal-->
                            <tr>
                              <td colspan="3"></td>
                              <td><label for="">Total:</label></td>
                              <td>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">₱</div>
                                    </div>
                                    <input name="list2" type="text" class="form-control input-sm text-right " id="grand_total2" value="{{$pendingContract->list2}}" >
                                  </div>
                              </td>
                            </tr>

                          </tbody>
                        </table>
                            
                        <button class="btn btn-success float-right">Update</button>
                    </form>
                    <button class="btn btn-danger "><a href="/contracts/pendings/{{$pendingContract->id}}" style="color: white;">Cancel</a></button>
                </div>
                   
            </div>
        </div>
    </div>
</div>

<script>


$(function() {
  $('.amount1').mask('######', {
    reverse: true
  });

  var total_amount1 = function() {
    var mul = 1;
    $('.amount1').each(function() {
      var num = $(this).val().replace(',', '');
      if (num != 0) {
        mul *= parseFloat(num);
      }
    });
    $('#total_amount1').val(mul);
  }
  $('.amount1').keyup(function() {
    total_amount1();
    grand_total();
    grand_total2();
  });


  //2nd row
  $('.amount2').mask('######', {
    reverse: true
  });
  var total_amount2 = function() {
    var mul = 1;
    $('.amount2').each(function() {
      var num = $(this).val().replace(',', '');
      if (num != 0) {
        mul *= parseFloat(num);
      }
    });
    $('#total_amount2').val(mul);
  }
  $('.amount2').keyup(function() {
    total_amount2();
    grand_total();
    grand_total2();
  });


  //3rd Row
  $('.amount3').mask('######', {
    reverse: true
  });
  var total_amount3 = function() {
    var mul = 1;
    $('.amount3').each(function() {
      var num = $(this).val().replace(',', '');
      if (num != 0) {
        mul *= parseFloat(num);
      }
    });
    $('#total_amount3').val(mul);
  }
  $('.amount3').keyup(function() {
    total_amount3();
    grand_total();
    grand_total2();
  });


  //4th row
  $('.amount4').mask('######', {
    reverse: true
  });
  var total_amount4 = function() {
    var mul = 1;
    $('.amount4').each(function() {
      var num = $(this).val().replace(',', '');
      if (num != 0) {
        mul *= parseFloat(num);
      }
    });
    $('#total_amount4').val(mul);
  }
  $('.amount4').keyup(function() {
    total_amount4();
    grand_total();
    grand_total2();
  });


  //5th row
  $('.amount5').mask('######', {
    reverse: true
  });
  var total_amount5 = function() {
    var mul = 1;
    $('.amount5').each(function() {
      var num = $(this).val().replace(',', '');
      if (num != 0) {
        mul *= parseFloat(num);
      }
    });
    $('#total_amount5').val(mul);
  }
  $('.amount5').keyup(function() {
    total_amount5();
    grand_total();
    grand_total2();
  });


  //Grand Total
  $('.total').mask('######', {
    reverse: true
  });
  var grand_total = function() {
    var sum = 0;
    $('.total').each(function() {
      var num = $(this).val().replace(',', '') || 0;
      if (num != 1) {
        sum += parseFloat(num);
      }
    });
    $('#grand_total').val(sum);
  }

  const calculateSale = (listPrice, discount) => {
  listPrice = parseFloat(listPrice);
  discount  = parseFloat(discount);
  return (listPrice - ( listPrice * discount / 100 )).toFixed(2); // Sale price
}
const calculateDiscount = (listPrice, salePrice) => {
  listPrice = parseFloat(listPrice);
  salePrice = parseFloat(salePrice);
  return 100 - (salePrice * 100 / listPrice); // Discount percentage
}

// Our use case
const $list = $('input[name="list"]'),
      $disc = $('input[name="disc"]'), 
      $sale = $('input[name="sale"]'); 
    
$list.add( $disc ).on('input', () => { // List and Discount inputs events
  let sale = $list.val();              // Default to List price
  if ( $disc.val().length ) {          // if value is entered- calculate sale price
    sale = calculateSale($list.val(), $disc.val());
  }
  $sale.val( sale );
});

$sale.on('input', () => {      // Sale input events
  let disc = 0;                // Default to 0%
  if ( $sale.val().length ) {  // if value is entered- calculate the discount
    disc = calculateDiscount($list.val(), $sale.val());
  }
  $disc.val( disc );
});

// Init!
$list.trigger('input');


//6th row
 $('.amount6').mask('######', {
    reverse: true
  });

  var total_amount6 = function() {
    var mul = 1;
    $('.amount6').each(function() {
      var num = $(this).val().replace(',', '');
      if (num != 0) {
        mul *= parseFloat(num);
      }
    });
    $('#total_amount6').val(mul);
  }
  $('.amount6').keyup(function() {
    total_amount6();
    grand_total1();
    grand_total2();
  });


  //7th row
  $('.amount7').mask('######', {
    reverse: true
  });
  var total_amount7 = function() {
    var mul = 1;
    $('.amount7').each(function() {
      var num = $(this).val().replace(',', '');
      if (num != 0) {
        mul *= parseFloat(num);
      }
    });
    $('#total_amount7').val(mul);
  }
  $('.amount7').keyup(function() {
    total_amount7();
    grand_total1();
    grand_total2();
  });


  //8th Row
  $('.amount8').mask('######', {
    reverse: true
  });
  var total_amount8 = function() {
    var mul = 1;
    $('.amount8').each(function() {
      var num = $(this).val().replace(',', '');
      if (num != 0) {
        mul *= parseFloat(num);
      }
    });
    $('#total_amount8').val(mul);
  }
  $('.amount8').keyup(function() {
    total_amount8();
    grand_total1();
    grand_total2();
  });


  //9th row
  $('.amount9').mask('######', {
    reverse: true
  });
  var total_amount9 = function() {
    var mul = 1;
    $('.amount9').each(function() {
      var num = $(this).val().replace(',', '');
      if (num != 0) {
        mul *= parseFloat(num);
      }
    });
    $('#total_amount9').val(mul);
  }
  $('.amount9').keyup(function() {
    total_amount9();
    grand_total1();
    grand_total2();
  });


  //10th row
  $('.amount10').mask('######', {
    reverse: true
  });
  var total_amount10 = function() {
    var mul = 1;
    $('.amount10').each(function() {
      var num = $(this).val().replace(',', '');
      if (num != 0) {
        mul *= parseFloat(num);
      }
    });
    $('#total_amount10').val(mul);
  }
  $('.amount10').keyup(function() {
    total_amount10();
    grand_total1();
    grand_total2();
  });


  //Total1
  $('.total1').mask('######', {
    reverse: true
  });
  var grand_total1 = function() {
    var sum = 0;
    $('.total1').each(function() {
      var num = $(this).val().replace(',', '') || 0;
      if (num != 1) {
        sum += parseFloat(num);
      }
    });
    $('#grand_total1').val(sum);
  }

  //Lumpsum Proposal
  $('.total2').mask('######', {
    reverse: true
  });
  var grand_total2 = function() {
    var sum = 0;
    $('.total2').each(function() {
      var num = $(this).val().replace(',', '') || 0;
      if (num != 1) {
        sum += parseFloat(num);
      }
    });
    $('#grand_total2').val(sum);
  }

});

 

</script>


<style>
  .table td, .table th{
  border-top: none !important;
  border-bottom: none !important;
}

</style>

@endsection
