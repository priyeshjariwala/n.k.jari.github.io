<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <div class="outer-w3-agile col-xl mt-3 mr-xl-3">
    <form action="https://test.payu.in/_payment" method="post" name="payuForm">

      {{csrf_field()}}

      @if(@$data) 
      <input type="hidden" name="key" value="{{$merch}}" />
      <input type="hidden" name="hash" value="{{$hash}}"/>
      <input type="hidden" name="txnid" value="{{$trans}}"/>
      <table>
        <tr>
          <td><b>Mandatory Parameters</b></td>
        </tr>
        <tr>
          <td>Amount: </td>
          <td><input name="amount" value="{{$data['amount']}}" /></td>
          <td>First Name: </td>
          <td><input name="firstname" id="firstname" value="{{$data['firstname']}}" /></td>
        </tr>
        <tr>
          <td>Email: </td>
          <td><input name="email" id="email" value="{{$data['email']}}" /></td>
          <td>Phone: </td>
          <td><input name="phone" value="{{$data['contact']}}"/></td>
        </tr>
        <tr>
          <td>Maintanance Info: </td>
          <td colspan="3"><textarea name="productinfo">{{$data['productinfo']}}</textarea></td>
        </tr>
        <tr>
          <td>Success URI: </td>
          <td colspan="3"><input type="text" name="surl" value="http://localhost/project/payment_view_sucess" size="64" /></td>
        </tr>
        <tr>
          <td>Failure URI: </td>
          <td colspan="3"><input type="text" name="furl" value="http://localhost/project/payment_view_failure" size="64" /></td>
        </tr>

        <tr>
          <td colspan="3"><input type="hidden" name="service_provider" value="PayuMoney" size="64" /></td>
        </tr>
        <!-- <tr>
          <td colspan="4"><input type="submit" value="Submit" /></td>
        </tr> -->
        @endif
        <tr>
            <td colspan="4"><input type="submit" value="Submit" /></td>
        </tr>

      </table>
    </form>
  </div>
</body>
</html>