const newsletterFormWrapper = document.getElementById("newsletter-form-wrapper");
const newsletterForm = document.getElementById("newsletter-form");
const newsletterThankYou = document.getElementById("newsletter-thank-you");


newsletterForm.addEventListener("submit", async (e) => {
    const API_URL = "https://api.voolt.com/api";

    e.preventDefault();
    const email = newsletterForm.querySelector("input").value;

    if(!(/^[a-zA-Z0-9._+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email))){
        return  newsletterForm.querySelector("input").style.borderColor = "red";
    }

    newsletterForm.querySelector('button').disabled = true;

    const res = await fetch(`${API_URL}/newsletterv2`, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({
            email,
        }),
    });

    if (res.ok) {
        newsletterThankYou.classList.remove('hidden')
        newsletterFormWrapper.classList.add('hidden')
    } else {
        newsletterForm.querySelector("input").style.borderColor = "red";
    }
});