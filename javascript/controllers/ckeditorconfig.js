// CkEditor V4 Config File : 
window.onload = function CKeditor() {
    ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
}