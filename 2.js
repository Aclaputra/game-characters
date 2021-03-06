

function urutkata(str){

    if (str){
        var res = str.split(" ");
        var patt1 = /[0-9]/ig;
        var result = str.match(patt1);
        result.sort();
        console.log(result);

        var first = res[0];
        var second = res[1];
        var third = res[2];
        var fourth = res[3];

        var array1 = [third, second, first, fourth];
        console.log(array1);
    }else if (str === undefined || str === null || str.length <= 0 ){
        console.log("");     
    }
    return str;
}

urutkata("ta3hun menjela2ng se1lamat b4aru");
urutkata("");