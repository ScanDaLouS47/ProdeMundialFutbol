const verPass = () => {
    let nuevaPass = document.getElementById('nuevaPass');
    let iconoEye = document.getElementById('iconoEye');
    let nuevaPass2 = document.getElementById('nuevaPass2');
    let iconoEye2 = document.getElementById('iconoEye2');

    if(nuevaPass.type == 'password'){
        nuevaPass.type = 'text';
        iconoEye.className = 'fa fa-eye-slash';
    }else{
        nuevaPass.type = 'password';
        iconoEye.className = 'fa fa-eye';
    }   
    
    if(nuevaPass2.type == 'password'){
        nuevaPass2.type = 'text';
        iconoEye2.className = 'fa fa-eye-slash';
    }else{
        nuevaPass2.type = 'password';
        iconoEye2.className = 'fa fa-eye';
    } 
    
}