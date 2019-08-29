<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="<?php echo base_url('assets/img/favicon.png'); ?>" type="image/ico" sizes="32x32">
        <title><?php
            if (!empty($title)) {
                echo $title;
            } else {
                echo 'Home';
            }
            ?> | NALA</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/css/font-awesome.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/hamburgers.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/slick-theme.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/slick.css'); ?>" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css">
        <link href="<?php echo base_url('assets/css/britecharts.min.css'); ?>">
        <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/media.css'); ?>" rel="stylesheet">
    </head>
    <body>
        <section class="spalsh boxs">
            <div class="spalsh_inner boxs">
                <div class="logowhite boxs">
                    <img src="<?php echo base_url('assets/img/logowhite.png'); ?>" class="img-responsive" alt="logo">
                </div>
                <div class="login boxs">
                    <h1>Log in to your account</h1>
                    <a href="javascript:void(0)"  id="sendd">
                        <p class="content" ><img src="<?php echo base_url('assets/img/google.svg'); ?>">Login with Google</p>
                        <p class="animated_tick"><svg id="m-check-mark" width="245px" height="173px" viewBox="0 0 245 173" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-opacity="1">
                            <polyline id="checkmark" stroke="#031019" stroke-width="15" points="5.640625 83.7607422 83.2539062 161.663086 238.97168 6.11328125"></polyline>
                            </g>
                            </svg></p>
                    </a>
                </div>
<!--                <button ><span>SEND</span></span></button>-->
                <input type="hidden" value="<?php echo base_url('site/set_session') ?>" id="set_session"/>
                <input type="hidden" value="<?php echo base_url('home') ?>" id="set_url"/>
                <input type="hidden" value="<?php echo base_url() ?>" id="set_urll"/>
                <div class='security boxs'>
                    <a href="jaavscript:void(0)">
                        <img src="<?php echo base_url('assets/img/locked.svg'); ?>" class="img-responsive"> Bank Grade Security
                    </a>
                </div>
            </div>
        </section>
        <section class="welcome boxs">
            <p id="firstuser"><img src="<?php echo base_url('assets/img/emoji.png'); ?>"></p>
        </section>
        <script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <script src="<?php echo base_url('assets/js/Chart.min.js'); ?>"></script>
    <!--    <script src="<?php echo base_url('assets/js/slick.js'); ?>"></script>-->
        <script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/event.js'); ?>"></script>
        <script src="https://www.gstatic.com/firebasejs/6.3.5/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/6.3.5/firebase-firestore.js"></script>  
        <!-- The core Firebase JS SDK is always required and must be listed first -->
        <script src="https://www.gstatic.com/firebasejs/6.3.5/firebase.js"></script>
        <script>
            var firebaseConfig = {
                apiKey: "AIzaSyB-QVWeLO14-BOhuJ192NrR8bf8rR2CyE4",
                authDomain: "nala-interface-debug.firebaseapp.com",
                databaseURL: "https://nala-interface-debug.firebaseio.com",
                projectId: "nala-interface-debug",
                storageBucket: "nala-interface-debug.appspot.com",
                messagingSenderId: "362059733530",
                appId: "1:362059733530:web:9128cad932d80f9a"
            };
           
            firebase.initializeApp(firebaseConfig);
            
            var redirectUrll = $('#set_url').val();
             var redirectUrlll = $('#set_urll').val();
           
            firebase.auth().onAuthStateChanged(function (user) {
                if (user) {

                    var displayName = user.displayName;
                    var photoURL = user.photoURL;
                    var uid = user.uid;
                    var email = user.email;

                    var db = firebase.firestore();

                    var docRef = db.collection("users-staging").doc(uid);

                    docRef.get().then(function (doc) {
                        if (doc.exists) {
                            var data = doc.data().email;
                            var uid = doc.data().firebaseId;
                            var photoURL = doc.data().onlinePhotoUrl;
                            var displayName = doc.data().givenName;
                            var url = $('#set_session').val();

                            $.post(url, {email: data, uniqueId: uid, name: displayName, image: photoURL}, function (out) {

                            });
                            if (data === email)
                            {
                                $('.content').hide();
                                $('.animated_tick').show();
                                setTimeout(function () {
                                    $('.spalsh').slideUp('slow').css('margin-top', '-100%');
                                }, 1000);
                                setTimeout(function () {
                                    $('.welcome').fadeIn().css('display', 'flex');
                                    $('#firstuser').append("<span>Welcome " + displayName + "</span>");
                                }, 2000);

                                setTimeout(function () {
                                    window.open(redirectUrll, '_self');
                                }, 3000);

                            }
                            console.log("Document data:", doc.data());
                        } else {
                            alert('you are not registered with us');
                            console.log("No such document!");
                            firebase.auth().signOut().then(function () {

                                window.location = redirectUrlll;

                            }).catch(function (error) {

                            });
                        }
                    }).catch(function (error) {
                        console.log("Error getting document:", error);
                    });
                }
            });

            var provider = new firebase.auth.GoogleAuthProvider();
            $(document).on('click', '#sendd', function (evt) {
                evt.preventDefault();

                firebase.auth().signInWithPopup(provider);
                firebase.auth().signInWithPopup(provider).then(function (result) {
                    // This gives you a Google Access Token. You can use it to access the Google API.
                    var token = result.credential.accessToken;
                    // The signed-in user info.
                    var user = result.user;
                    // ...
                }).catch(function (error) {
                    // Handle Errors here.
                    var errorCode = error.code;
                    var errorMessage = error.message;
                    alert(errorMessage);
                    // The email of the user's account used.
                    var email = error.email;
                    // The firebase.auth.AuthCredential type that was used.
                    var credential = error.credential;
                    // ...
                });
            });

        </script>
    </body>

</html>
