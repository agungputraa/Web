fetch('data.json')
.then(function(response){
    return response.json();
})
.then (function(data){
    for(var i = 0; i<data.length; i++){
        document.getElementById("data").innerHTML += "<h2>"+data[i].skin+"</h2>"+"<img src='"+data[i].img+"'>"+"<a href='"+data[i].url+"'> Download</a>";
    }
    })
.catch(function(err){
console.log(err)
})