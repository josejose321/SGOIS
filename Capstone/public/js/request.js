const formSubmmit = document.getElementById('form');



const sendData = () => {
    // alert('form submit!')
    axios.post('/Student')
        .then(res => {
            console.log(res)
            alert(res)
        })
        .catch(err => {
            console.error(err);
        })
}







formSubmmit.addEventListener('submit', sendData)