var webp=require('webp-converter');

//pass input image(.jpeg,.pnp .....) path ,output image(give path where to save and image file name with .webp extension) 
//pass option(read  documentation for options) 

//cwebp(input,output,option,result_callback) 
files = ["speaker-sm", "speaker-md", "speaker-lg"];
for (var i = files.length - 1; i >= 0; i--) {
	webp.cwebp("img/" + files[i] + ".jpg","img/" + files[i] + ".webp","-q 80",function(status) {
  	//if exicuted successfully status will be '100' 
  	//if exicuted unsuccessfully status will be '101' 
  	console.log(status);
	});
}
for (var i = files.length - 1; i >= 0; i--) {
	webp.cwebp("img/2x/" + files[i] + ".jpg","img/2x/" + files[i] + ".webp","-q 80",function(status) {
  	//if exicuted successfully status will be '100' 
  	//if exicuted unsuccessfully status will be '101' 
  	console.log(status);
	});
}