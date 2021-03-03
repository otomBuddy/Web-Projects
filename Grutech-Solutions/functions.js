var name=document.getElementById('fname');
var mail=document.getElementById('email');
var enq=document.getElementById('enquiry');
var buttn=document.getElementById('btn');

function submit(){
    var firebaseweb=firebase.database().ref();

    firebaseweb.child("Text").set("some value")
}