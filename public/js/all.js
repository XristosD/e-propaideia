function multFunction( x ) {
    var t = "";
    var r =0;
    for (i = 1 ; i < 11 ; i++) {
        r += x
        t += "<p>"+x+" &#215; "+i+" = "+r+"   ( "+x+" φορές το "+i+" ίσον "+r+" )</p>\n";
    }
    return t;
}

function myFunction(i, row){
    for(r=1;r<=row;r++){    
        for(l=1;l<=i;l++){
            document.querySelector("#row"+r+row+" div:nth-child("+l+")").style.background = 'red';
            
        }
        for(l=i+1;l<11;l++){
            document.querySelector("#row"+r+row+" div:nth-child("+l+")").style.background = 'white';
        }
    }
}

function myFunction3(val, row){
    document.getElementById('showedAns'+row).innerHTML = val; 
    document.getElementById('hiddenAns'+row).value = val;
}

function myFunction2(mult){
    toReturn = '';
    toReturn += '<div class="border rounded-lg m-2" style="max-width:620px;">\n';
    toReturn += '\t<div class="row justify-content-center">\n';
    for(i=1;i<11;i++){
        toReturn += '\t\t<div class="col m-2" style="height:45ph;max-width:45px;cursor:grab" onClick="myFunction('+i+', '+mult+')">'+i+'</div>\n';
    }
    toReturn += '\t</div>\n';
    for(i=1;i<=mult;i++){
        toReturn += '\t<div id="row'+i+mult+'" class="row justify-content-center">\n';
        for(k=1;k<11;k++){
            toReturn += '\t\t<div class="col border rounded-lg m-2" style="height:45px;max-width:45px;background:white;"></div>\n';
        }
        toReturn += '</div> ';
    }
    toReturn += '</div>'
    return toReturn;
}