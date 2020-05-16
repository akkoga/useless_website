function previsualisez( input) {
    apercu=input.value;
    inImg= 'file:///'+apercu;
    document.getElementById('img').innerHTML='<img class="photo" src="file:///'+apercu+'" border="0">';
    }