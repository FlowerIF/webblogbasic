
function validate(){
    let check = false
    // check title
    let title = document.getElementById('title').value
    if(title.length === 0){
        document.getElementById('title_error').innerHTML = 'Tiêu đề không được để trống'
        check = true
    }else{
        document.getElementById('title_error').innerHTML = ''
    }

    //check content
    let content = document.getElementById('content').value
    if(content.length === 0){
        document.getElementById('content_error').innerHTML = 'Nội dung không được để trống'
        check = true
    }else{
        document.getElementById('content_error').innerHTML = ''
    }

    //check photo
    let photo = document.getElementById('photo').value
    if(photo.length === 0){
        document.getElementById('photo_error').innerHTML = 'Vui lòng điền link ảnh vào'
        check = true
    }else{
        document.getElementById('photo_error').innerHTML = ''
    }


    if(check){
        return false;
    }

}