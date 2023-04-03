
document.getElementById("anonim")?.addEventListener('change', function() {
    let container = document.getElementById("contactDataContainer");
    if (this.checked) {
        container.style.maxHeight = container.offsetHeight + "px";
        //container.style.maxHeight="1000px";
        container.style.maxHeight="0px";
        setTimeout(() => {
            document.querySelectorAll('.personalDataInput').forEach(function(input) {
                input.value = "";
            });
        }, "500");

    } else {
        container.style.maxHeight="1000px";
    }
});


for (let i = 1; i < 6; ++i) {
    document.querySelectorAll('.authorityItem')?.forEach(function(item) {
        const clone = item.cloneNode(true);
        let dimension = document.getElementById("authorityListContainer").offsetWidth/3 - 20 + "px";
        clone.style.maxWidth = dimension;
        clone.style.minWidth = dimension;
        document.getElementById("authorityListContainer").appendChild(clone);
    });
}


document.querySelectorAll('.authorityItem')?.forEach(function(item) {
    let dimension = document.getElementById("authorityListContainer").offsetWidth/3 - 20 + "px";
    item.style.maxWidth = dimension;
    item.style.minWidth = dimension;
});


for (let i = 1; i < 100; ++i) {
    scroll = document.getElementById("authorityList");
    if(scroll){
        setTimeout(() => {
            let calcLeft = scroll.style.marginLeft.slice(0, -2) - document.getElementById("authorityListContainer")?.offsetWidth/3 + "px";
            scroll.style.marginLeft = calcLeft;

        }, 5000*i);
    }
}

document.getElementById("description").addEventListener('change', function(event) {
    let censoredDiction =  [
        "sex", "presedinte", "penis", "parlament","guvern"
    ];
    let words = event.target.value.split(' ');
    let test = true;
    let submitButton = document.getElementById("submitButton");

    words.forEach(word=>{
        if(censoredDiction.includes(word)){
            alert("Atenție, a fost detectat informații interzise, vă rugăm verificati datele introduse pentru a reactiva butonul de expediere")
            submitButton.disabled = true;
            submitButton.style.border="1px solid #999999";
            submitButton.style.backgroundColor="#cccccc";
            submitButton.style.color="#666666";
            submitButton.style.cursor="initial";


            test = false;
        }
    })

    if(test){
        submitButton.disabled = false;
        submitButton.style.border="none";
        submitButton.style.backgroundColor="#0000EB";
        submitButton.style.color="white";
        submitButton.style.cursor="pointer";
    }
});

document.getElementById("imageFile").addEventListener('change', function(event) {
    console.log(event.target.value);
});

