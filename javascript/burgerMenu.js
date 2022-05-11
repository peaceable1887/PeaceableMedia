function myFunction() {

    let elms = document.getElementsByTagName("nav");

        Array.from(elms).forEach((x) => {
            if (x.style.display === "none" ){
                x.style.display = "block";
            }

            else
            {
                x.style.display = "none";
            }

        })


}

