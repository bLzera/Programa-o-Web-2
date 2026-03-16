function flip(){
    if(document.querySelector('h2').style.rotate === '180deg'){
        document.querySelector('h2').style.rotate = '0deg';
        return;
    }
    document.querySelector('h2').style.rotate = '180deg';
}