let from = document.getElementById("from");
let to = document.getElementById("to");
let input = document.getElementById("input");
let result = document.getElementById("result");
let historyList = document.getElementById("historyList");

function createOption(x,y,z){
    let o = document.createElement("option");
    let t = document.createTextNode(y);
    o.setAttribute("value",toNum(z));
    o.appendChild(t);
    x.appendChild(o);
}

function toNum(x){
    return Number(x.replace(",",""));
}

for(x in data.rates){
    createOption(from,x,data.rates[x]);
    createOption(to,x,data.rates[x]);
    //console.log(x,data.rates[x]);
}

function createTr(x){
    let tr = document.createElement("tr");
    let rowSpacer = document.getElementById("rowSpacer");

    if(rowSpacer){
        rowSpacer.remove();
    }

    x.map(function(el){

        let td = document.createElement("td");
        let text = document.createTextNode(el);
        td.appendChild(text);
        tr.appendChild(td);
    });

    historyList.appendChild(tr);
}

function store(){
    localStorage.setItem("record",historyList.innerHTML);
}

document.getElementById("calc").addEventListener("submit",function(e){

    e.preventDefault();
    //get data
    let x = input.value;
    let y = from.value;
    let z = to.value;

    //process
    let fromText = x+" "+from.options[from.selectedIndex].innerHTML;
    let toText = to.options[to.selectedIndex].innerHTML;
    let first = x * y;
    let second = first/z;
    let resultNum = second.toFixed(2);
    let date = new Date().toLocaleString();
    let arr = [date,fromText,toText,resultNum];
    createTr(arr);
    store();
    //console.log(second.toFixed(2));  //datama 2 nay yar

    //set data
    result.innerHTML = resultNum;
    input.value = "";
    input.focus();
    from.value = "";
    to.value = "1";
});

function test(){
    console.log(from.options[from.selectedIndex].innerHTML);
}

(function(){
    if(localStorage.getItem("record")){
        historyList.innerHTML = localStorage.getItem("record");
    }else{
        historyList.innerHTML = `<tr id="rowSpacer"><td colspan="4">There is no record</td></tr>`;
    }
})();

function changeMode() {
    document.body.classList.toggle("night-mode");
    document.getElementById("modeIcon").classList.toggle("fa-sun");
}