@extends('layouts.admin')

@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('assets/node_modules/toastr/toastr.min.css')}}">
   


    <div class="row">
        <!-- Column -->
        <div class="col-lg-12 col-md-12">
            <div class="card" style="margin-left:150px; margin-right: 150px">
                <div class="card-body">

                      <div class="login-box card">
                            <div class="card-body">
                                
                                    <h3 class="box-title m-b-20">Find car details from mobile app</h3>
                                   
                                    <div class="text-center">
                                        <img src="{{url('imagess/giphy.gif')}}"> 

                                        <br>
                                        <p>Waiting for signal</p>
                                    </div>

                                </form>
                            </div>
                        </div>


                </div>
            </div>
        </div>
    </div>

    @stop

   <script src="{{asset('assets/node_modules/jquery/jquery.min.js')}}"></script>
   <script src="https://www.gstatic.com/firebasejs/5.8.4/firebase-app.js"></script>
   <script src="https://www.gstatic.com/firebasejs/5.8.4/firebase-auth.js"></script>
   <script src="https://www.gstatic.com/firebasejs/5.8.4/firebase-database.js"></script>

    <script src="{{asset('assets/node_modules/toastr/toastr.min.js')}}"></script>


    <script>

    function makeserver(method, url, data) {

    return new Promise((resolve, reject) => {
        const xhr = new XMLHttpRequest() || new ActiveXObject("Microsoft.XMLHTTP");
        xhr.open(method, url); //open(method, url, async, user, psw)
        xhr.setRequestHeader("Content-type", "application/json");
        // xhr.setRequestHeader("Authorization", authorization);
        xhr.onload = function() {
            var response = xhr.responseText;
            if (xhr.readyState == 4 && xhr.status == "200") {
                return resolve(response);
            } else {
                return reject(response);
            }
        };
        xhr.onerror = function() {
            return reject(xhr.responseText || 'Network request failed');
        };

        if (method.toLowerCase() == 'get') {
            xhr.send();
        } else {
            //IF its a post request, send with parameters
            xhr.send(data);
        }

    });

}

      // Initialize Firebase
      var config = {
        apiKey: "AIzaSyDpa2-t6ABE-nkvQmYHKi6HYauh1aLi0Do",
        authDomain: "vehicle-verification-system.firebaseapp.com",
        databaseURL: "https://vehicle-verification-system.firebaseio.com",
        projectId: "vehicle-verification-system",
        storageBucket: "vehicle-verification-system.appspot.com",
        messagingSenderId: "110527992815"
      };
      firebase.initializeApp(config);


     // Get a reference to the database service
    var database = firebase.database();

  //   database.ref('drivers/plate_numbers').set({
  //   "1223343dhdhd": "BBer 123 ER"
  // });


//   database.ref('drivers/plate_numbers').on('child_added', function(snapshot) {
//   console.log(snapshot.val());
// });

// window.addEventListener("load", function(){
//       database.ref('drivers/plate_numbers').on('child_added', function(snapshot) {
//   console.log(snapshot.val());
// });

// });

  database.ref('drivers').on('child_changed', function(snapshot) {
    

    if (snapshot.key == "plate_numbers") {

        var dbresult = snapshot.val();

        last = Object.keys(dbresult)[Object.keys(dbresult).length-1];

        var plate_numb = dbresult[last];

        
         makeserver("get", "{{url('findcar')}}/"+plate_numb+"", "").then(function(response){
            response = JSON.parse(response);
            // console.log(JSON.parse(response));
          window.location = response.url;

         }).catch(function(error){

            toastr.error("oops, plate number not found");
            //console.log(error,"error");
         });

        //PLTIJV40-NGR

    }
 
});

    </script>