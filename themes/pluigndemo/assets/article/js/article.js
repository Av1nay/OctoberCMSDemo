
$(function () {
    if (getfeaturedImage == 'yes') {
        articles.forEach(individualArticles =>{
            switch (getImageOrientation) {
                case 'right':
                    $("#bodySection").addClass("pull-left")
                    $("#imageSection").addClass("pull-right")
                    break;
                case 'left':
                    $("#bodySection").addClass("pull-right")
                    /* $("#imageSection").addClass("pull-left") */
                    break;
                case 'alt_right':
                    alert(getImageOrientation);
                    break;
                case 'alt_left':
                    alert(getImageOrientation);
                    break;
                default:
                    break;
            }
        }
            
        )

    }





})
