<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bidding Quotation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<div class="jumbotron text-center">
  <h1>Quotation For supplier</h1>
  <p></p> 
</div>
  
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <h3>Quotation</h3>
      <table class="table table-bordered">
        <tr>
            <th></th>
            <th colspan="4">
                <table class="table m-0" style="table-layout: fixed; width: 100%;">
                    <tr>
                        @foreach ($getData['product_supplier'] as $supplier)
                            <th>{{ $supplier?->supplier?->name}}
                                <p style="font-size: 10px;margin:1px">Currency : {{ $supplier?->supplier?->currency}}</p>
                                <p style="font-size: 10px;margin:1px">Payment Term : {{ $supplier?->supplier?->payment_terms}}</p>
                                <p style="font-size: 10px;margin:1px">Delivery Period : {{ $supplier?->supplier?->delivery_period}}</p>
                            </th>
                        @endforeach
                        
                    </tr>
                </table>
            </th>
            <tr>
                <td>
                    <table class="table ">
                        <tr>
                            <th>Sl No</th>
                            <th>VAT</th>
                            <th>Item Name</th>
                            <th>Unit</th>
                            <th>Quantity</th>
                        </tr>
                        <tr>
                            <td>{{$getData['product']->id}}</td>
                            <td><input type="checkbox"></td>
                            <td>{{$getData['product']->product_name}}</td>
                            <td>{{$getData['product']->unit}}</td>
                            <td>1</td>
                        </tr> 
                        
                        <tr>
                            <td colspan=5>Net Total Value</td>
                        </tr>
                        <tr>
                            <td colspan=5>Net Value of awarded item</td>
                        </tr>
                        <tr>
                            <td colspan=5>Vat For awarded item</td>
                        </tr>
                        <tr>
                            <td colspan=5>Net Total value of awarded item</td>
                        </tr>
                    </table>
                </td>
                @php
                    $i = 1;
                @endphp
                @foreach ($getData['product_supplier'] as $supply_value)
                <td>
                    <table class="table">
                        <tr>
                            <th>Unit Cost</th>
                            <th>Total Cost</th>
                        </tr>
                        <tr @if($i == 1)? style="background: yellow" @endif>
                            <td  onclick="clickTopassData({{ json_encode($supply_value) }})">
                                {{ $unit_cost = $supply_value?->product?->unit_price }}
                            </td>
                            <td>{{ $total_cost = $supply_value?->total_cost}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>{{ $unit_cost + $total_cost}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>{{ $prod_cost = $unit_cost + $total_cost}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>{{ $vat = $supply_value?->product?->vat * ($unit_cost + $total_cost) / 100 }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>{{ $prod_cost + $vat}}</td>
                        </tr>
                    </table>
                </td>
                @php $i ++ @endphp
                @endforeach
            </tr>
            <tr>
                <table class="table table-bordered">
                    <tr>
                        <td>Supplier Name</td>
                        <td>Awarded Line</td>
                    </tr>
                    <tr>
                        <td>Al Ain plastic industry</td>
                        <td>1.1</td>
                    </tr>
                    <tr>
                        <td>Award submission  reccomandation</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Item: # 1.1 to m/s, Al ain plastic industry AED 252.0000</td>
                        <td></td>
                    </tr>
                    <tr>
                       
                        <td colspan="2"> Comment: <textarea name="comment" id="" class="w-100"></textarea></td>
                    </tr>
                </table>
            </tr>
            
        </tr>
        </table>
    </div>
  </div>
</div>
<script>
    function clickTopassData(value) {
        console.log("Value passed from Blade:", value);
        
        // You can access specific attributes of the value if it's an object
        if (value) {
            alert("Unit Cost:"+value.product.unit_price);
        }
    }
</script>
</body>
</html>
