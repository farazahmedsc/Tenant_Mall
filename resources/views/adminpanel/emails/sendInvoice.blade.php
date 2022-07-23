<!DOCTYPE html>
<html>
<head>
    <title>Madina Mall Invoice</title>
</head>
<body>
    <h4>Invoice INV-{{ $details['invoice_no'] }}</h4>
    <p><b>Issue Date:</b> {{ date('d M Y')}}
    <br>
        <b>Issue For: </b>{{ $details['name'] }} <i>({{ $details['area'] }})</i>
    </p>

    <br>

    <p><b>Monthly Rent <i>{{ $details['generation_month'] }}</i>:</b> <span style="font-size: 16px"> ${{ $details['rent']  }}</span></p>
    <p><b>Monthly Maintenece:</b> <span style="font-size: 16px"> ${{ $details['maintenance'] }}</span></p>
    <br>
    <p><b>Total Amount:</b> <span style="font-size: 16px">  ${{ $details['total_amount'] }}</span></p>
    <br>


    <p>Thank you</p>
    
    <p><b>Issue By:</b> {{ $details['company_name'] }}
        <br>
        {{ $details['company_street'] }}  {{ $details['company_apt'] }}, {{ $details['company_city'] }}, {{ $details['company_zip'] }}
        <br>
        {{ $details['company_phone_number'] }} 
        <br>
        {{ $details['company_email'] }} 
        <br>
    <img src="{{ url('/') }}/adminpanel/images/mmlogo.jpg" height="80" alt="image">
</body>
</html>