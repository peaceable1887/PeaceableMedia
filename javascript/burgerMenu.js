function burgerMenu() {

    let elms = document.getElementsByTagName("nav");

        Array.from(elms).forEach((x) => {
            if (x.style.display === "none" ){
                x.style.display = "flex";
                x.style.alignItems = "center";
                x.style.flexDirection = "column";
                x.style.paddingTop = "4%";
            }
            else
            {
                x.style.display = "none";
            }

        })
}

