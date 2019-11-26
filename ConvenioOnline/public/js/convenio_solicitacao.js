var dropdown_active = false

function dropdown(dropdown_active) {
    if (dropdown_active) {
        ocultarDD()       
    } else {       
        mostrarDD()  
    }    
}

function mostrarDD() {
    let options = document.getElementsByClassName('options')[0]
    options.style.display = "block"
    dropdown_active = true
}

function ocultarDD() {
    let options = document.getElementsByClassName('options')[0]
    dropdown_active = false
    options.style.display = "none"
}