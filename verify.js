function checkInput(a,b,c,d,e) {
    var name = document.getElementById(a);
    var error = document.getElementById(b);
    if (name.value.length < c){
        error.innerHTML = d + ' character must not be less than ' + e;
        error.style.color = 'red';
        error.style.display = 'block';
    }
    else{
        error.innerHTML = 'Successful';
        error.style.color = 'green';
    }
}
