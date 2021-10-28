const form = document.getElementById('123');


form.addEventListener('click', function(event){
    event.preventDefault();
    postData();
});

function postData(){
    let object = new Object();
    object.username = "Long";
    object.id = 2;

    fetch('handle/handle_form.php', {
        method: 'post',
        // body:JSON.stringify({
        //     username: 'Long',
        //     id : 2
        // }),
        body:JSON.stringify(object),  
        headers : { 
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        },
        mode: 'cors'
      })
      .then((response) => response.text())
      .then((data) => {
          var obj = JSON.parse(data);
          console.log(obj.name);
          console.log(data);
        // var obj = JSON.parse(data);
        // var k = obj.username;
        // console.log(obj);
        // console.log(k);
        // var l = JSON.parse(k);
        // console.log(l.name);
        });  
//     const response = await fetch('handle/handle_form.php');
//     const data = await response.json();
//     console.log(data.username);
}