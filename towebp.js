var webp=require('webp-converter');

//pass input image(.jpeg,.pnp .....) path ,output image(give path where to save and image file name with .webp extension) 
//pass option(read  documentation for options) 

//cwebp(input,output,option,result_callback) 
files = ["x-hero-sm.png", "x-hero-lg.png"];
for (var i = files.length - 1; i >= 0; i--) {
	webp.cwebp("img/2x/" + files[i],"img/2x/" + files[i],"-q 80",function(status) {
  	//if exicuted successfully status will be '100' 
  	//if exicuted unsuccessfully status will be '101' 
  	console.log(status);
	});
}