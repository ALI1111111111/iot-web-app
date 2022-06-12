<!DOCTYPE html>
<html lang="en">
 <!--@include("arduino.js")-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ Session::token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ali-Iot-system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--@include('dashboard.Header')-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            getval();
            
            setInterval(getval, 7000);

            light1();
            light2();
            light3();
            light4();
            function light1() {
                $("#led1").click(function() {
                    // $.get("http://10.0.0.4/elect/public/ard/1", function(data, status){
                    var data = document.getElementById("led1").innerHTML;
                    if (data == "LEd is Power oFF") {
                        document.getElementById("led1").disabled = true;
                        document.getElementById("bulb").src = "{{ asset('/icon/spinner.gif') }}";
                        document.getElementById("led1").innerHTML = "Turning Ligh On";

                        $.post("https://iotproj.azurewebsites.net/ard/btn", {
                                // '_token': $('meta[name=csrf-token]').attr('content'),
                                'id':1,
                                On: 0

                            },
                            function(data, status) {
                                // alert("Data: " + data + "\nStatus: " + status);
                                // alert( "\nStatus: " + status);
                                if (status == "success") {
                                    document.getElementById("led1").disabled = false;
                                    document.getElementById("led1").innerHTML = "LEd is Power On";
                                    document.getElementById("bulb").src =
                                        "{{ asset('/icon/on.svg') }}";
                                }
                            });

                    } else if (data == "LEd is Power On") {
                        document.getElementById("led1").disabled = true;
                        document.getElementById("bulb").src = "{{ asset('/icon/spinner.gif') }}";
                        document.getElementById("led1").innerHTML = "Turning Ligh OFF";
                        $.post("https://iotproj.azurewebsites.net/ard/btn", {
                                // '_token': $('meta[name=csrf-token]').attr('content'),
                                'id':1,
                                On: 1

                            },
                            function(data, status) {
                                // alert("Data: " + data + "\nStatus: " + status);
                                // alert( "\nStatus: " + status);
                                if (status == "success") {
                                    document.getElementById("led1").disabled = false;
                                    document.getElementById("led1").innerHTML = "LEd is Power oFF";
                                    document.getElementById("bulb").src =
                                        "{{ asset('/icon/off.svg') }}";
                                }
                            });
                    }

                    // });




                });
            }

            function light2() {
                $("#led2").click(function() {
                    // $.get("http://10.0.0.4/elect/public/ard/1", function(data, status){
                    var data = document.getElementById("led2").innerHTML;
                    if (data == "Motor is Power oFF") {

                        document.getElementById("led2").disabled = true;
                        document.getElementById("bulb2").src = "{{ asset('/icon/spinner.gif') }}";
                        document.getElementById("led2").innerHTML = "Turning Motor On";

                        $.post("https://iotproj.azurewebsites.net/ard/btn", {
                                // '_token': $('meta[name=csrf-token]').attr('content'),
                                'id':2,
                                On: 0

                            },
                            function(data, status) {
                                // alert("Data: " + data + "\nStatus: " + status);
                                // alert( "\nStatus: " + status);
                                if (status == "success") {
                                    document.getElementById("led2").disabled = false;
                                    document.getElementById("led2").innerHTML = "Motor is Power On";
                                    document.getElementById("bulb2").src =
                                        "{{ asset('/icon/w_on.png') }}";
                                }
                            });

                    } else if (data == "Motor is Power On") {
                        document.getElementById("led2").disabled = true;
                        document.getElementById("bulb2").src = "{{ asset('/icon/spinner.gif') }}";
                        document.getElementById("led2").innerHTML = "Turning Motor OFF";
                        $.post("https://iotproj.azurewebsites.net/ard/btn", {
                                // '_token': $('meta[name=csrf-token]').attr('content'),
                                'id':2,
                                On: 1

                            },
                            function(data, status) {
                                // alert("Data: " + data + "\nStatus: " + status);
                                // alert( "\nStatus: " + status);
                                if (status == "success") {
                                    document.getElementById("led2").disabled = false;
                                    document.getElementById("led2").innerHTML = "Motor is Power oFF";
                                    document.getElementById("bulb2").src =
                                        "{{ asset('/icon/w_off.png') }}";
                                }
                            });
                    }

                    // });




                });
            }

            function light3() {
                $("#led3").click(function() {
                    // $.get("http://10.0.0.4/elect/public/ard/1", function(data, status){
                    var data = document.getElementById("led3").innerHTML;
                    if (data == "LEd is Power oFF") {

                        document.getElementById("led3").disabled = true;
                        document.getElementById("bulb3").src = "{{ asset('/icon/spinner.gif') }}";
                        document.getElementById("led3").innerHTML = "Turning Ligh On";

                        $.post("https://iotproj.azurewebsites.net/ard/btn", {
                                // '_token': $('meta[name=csrf-token]').attr('content'),
                                'id':3,
                                On: 0

                            },
                            function(data, status) {
                                // alert("Data: " + data + "\nStatus: " + status);
                                // alert( "\nStatus: " + status);
                                if (status == "success") {
                                    document.getElementById("led3").disabled = false;
                                    document.getElementById("led3").innerHTML = "LEd is Power On";
                                    document.getElementById("bulb3").src =
                                        "{{ asset('/icon/on.svg') }}";
                                }
                            });

                    } else if (data == "LEd is Power On") {
                        document.getElementById("led3").disabled = true;
                        document.getElementById("bulb3").src = "{{ asset('/icon/spinner.gif') }}";
                        document.getElementById("led3").innerHTML = "Turning Ligh OFF";
                        $.post("https://iotproj.azurewebsites.net/ard/btn", {
                                // '_token': $('meta[name=csrf-token]').attr('content'),
                                'id':3,
                                On: 1

                            },
                            function(data, status) {
                                // alert("Data: " + data + "\nStatus: " + status);
                                // alert( "\nStatus: " + status);
                                if (status == "success") {
                                    document.getElementById("led3").disabled = false;
                                    document.getElementById("led3").innerHTML = "LEd is Power oFF";
                                    document.getElementById("bulb3").src =
                                        "{{ asset('/icon/off.svg') }}";
                                }
                            });
                    }

                    // });




                });
            }

            function light4() {
                $("#led4").click(function() {
                    // $.get("http://10.0.0.4/elect/public/ard/1", function(data, status){
                    var data = document.getElementById("led4").innerHTML;
                    if (data == "LEd is Power oFF") {

                        document.getElementById("led4").disabled = true;
                        document.getElementById("bulb4").src = "{{ asset('/icon/spinner.gif') }}";
                        document.getElementById("led4").innerHTML = "Turning Ligh On";

                        $.post("https://iotproj.azurewebsites.net/ard/btn", {
                                // '_token': $('meta[name=csrf-token]').attr('content'),
                                'id':4,
                                On: 0

                            },
                            function(data, status) {
                                // alert("Data: " + data + "\nStatus: " + status);
                                // alert( "\nStatus: " + status);
                                if (status == "success") {
                                    document.getElementById("led4").disabled = false;
                                    document.getElementById("led4").innerHTML = "LEd is Power On";
                                    document.getElementById("bulb4").src =
                                        "{{ asset('/icon/on.svg') }}";
                                }
                            });

                    } else if (data == "LEd is Power On") {
                        document.getElementById("led4").disabled = true;
                        document.getElementById("bulb4").src = "{{ asset('/icon/spinner.gif') }}";
                        document.getElementById("led4").innerHTML = "Turning Ligh OFF";
                        $.post("https://iotproj.azurewebsites.net/ard/btn", {
                                // '_token': $('meta[name=csrf-token]').attr('content'),
                                'id':4,
                                On: 1

                            },
                            function(data, status) {
                                // alert("Data: " + data + "\nStatus: " + status);
                                // alert( "\nStatus: " + status);
                                if (status == "success") {
                                    document.getElementById("led4").disabled = false;
                                    document.getElementById("led4").innerHTML = "LEd is Power oFF";
                                    document.getElementById("bulb4").src =
                                        "{{ asset('/icon/off.svg') }}";
                                }
                            });
                    }

                    // });




                });
            }

            function getval() {
                $.get("https://iotproj.azurewebsites.net/ard/1", function(data, status) {
                    if (data == 1) {
                        document.getElementById("led1").innerHTML = "LEd is Power oFF";
                        document.getElementById("bulb").src = "{{ asset('/icon/off.svg') }}";

                    } else {
                        document.getElementById("led1").innerHTML = "LEd is Power On";
                        document.getElementById("bulb").src = "{{ asset('/icon/on.svg') }}";
                    }

                });
                $.get("https://iotproj.azurewebsites.net/ard/2", function(data, status) {
                    if (data == 1) {
                        document.getElementById("led2").innerHTML = "Motor is Power oFF";
                        document.getElementById("bulb2").src = "{{ asset('/icon/w_off.png') }}";

                    }
                 else {
                        document.getElementById("led2").innerHTML = "Motor is Power On";
                        document.getElementById("bulb2").src = "{{ asset('/icon/w_on.png') }}";
                    }

                });
                $.get("https://iotproj.azurewebsites.net/ard/3", function(data, status) {
                    if (data == 1) {
                        document.getElementById("led3").innerHTML = "LEd is Power oFF";
                        document.getElementById("bulb3").src = "{{ asset('/icon/off.svg') }}";

                    } else {
                        document.getElementById("led3").innerHTML = "LEd is Power On";
                        document.getElementById("bulb3").src = "{{ asset('/icon/on.svg') }}";
                    }

                });
                $.get("https://iotproj.azurewebsites.net/ard/4", function(data, status) {
                    if (data == 1) {
                        document.getElementById("led4").innerHTML = "LEd is Power oFF";
                        document.getElementById("bulb4").src = "{{ asset('/icon/off.svg') }}";

                    } else {
                        document.getElementById("led4").innerHTML = "LEd is Power On";
                        document.getElementById("bulb4").src = "{{ asset('/icon/on.svg') }}";
                    }

                });
                 $.get("https://iotproj.azurewebsites.net/water/temp", function(data, status) {
                   
                        document.getElementById("temp").innerHTML = data+"C";
                        

                });
                $.get("https://iotproj.azurewebsites.net/water/humidity", function(data, status) {
                   
                        document.getElementById("humi").innerHTML = data+"%";
                        

                });
            }
        });
    </script>

</head>

<body style="background-color: black" >
<div style="margin-left:25%" >

    <div   style="display: inline-flex;">
        <div class="card" style="width:25%;margin-left:5%">

            <img class="card-img-top" src="{{ asset('/icon/temperature.svg') }}" alt="temparature">
            <h4 id="temp" style="text-align: center"> Loading   </h4>
        </div>
        <div class="card" style="width:25%;margin-left:5%">

            <img class="card-img-top" src="{{ asset('/icon/humidity.svg') }}" alt="temparature">
            <h4 id="humi" style="text-align: center"> Loading</h4>
        </div>

    </div>

</div>
<div style="display: inline-flex" class="container">
  <!--<h2>Room Light</h2>-->

  <div class="card" style="width:200px;align-self: center;">
    <img id="bulb" class="card-img-top" src="{{ asset('/icon/off.svg') }}" alt="Card image" style="width:100%">



      <button id="led1"  name="On"  href="#" class="btn btn-primary">Loading</button>

  </div>
  <div class="card" style="width:200px;align-self: center;">
    <img id="bulb2" class="card-img-top" src="{{ asset('/icon/w_off.png') }}" alt="Card image" style="width:100%">



      <button id="led2"  name="On"  href="#" class="btn btn-primary">Loading</button>

  </div>
  <div class="card" style="width:200px;align-self: center;">
    <img id="bulb3" class="card-img-top" src="{{ asset('/icon/off.svg') }}" alt="Card image" style="width:100%">



      <button id="led3"  name="On"  href="#" class="btn btn-primary">Loading</button>

  </div>
  <div class="card" style="width:200px;align-self: center;">
    <img id="bulb4" class="card-img-top" src="{{ asset('/icon/off.svg') }}" alt="Card image" style="width:100%">



      <button id="led4"  name="On"  href="#" class="btn btn-primary">Loading</button>

  </div>
  <br>


</div>



</body>


</html>
