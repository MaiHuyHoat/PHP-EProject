function changeHandler(evt) {
 
    // FileList object.
    var files = evt.target.files;

    var file = files[0];

    var fileReader = new FileReader();


    fileReader.onload = function(progressEvent) {
        var url = fileReader.result;

        // Something like: data:image/png;base64,iVBORw...Ym57Ad6m6uHj96js
 
        //
        var myImg = document.getElementById("myimage");
        myImg.src= url;
    }


    // Read file asynchronously.
    fileReader.readAsDataURL(file); // fileReader.result -> URL.
}
