export let responseParse = (response, showSuccessMessage = true) => {
    let type = 'success';
    let message = '';

    if (response.status === 200 && showSuccessMessage){
        type = 'success';
        message = response.data.message;
    } else if(response.code === 422 || response.code === 429) {
        let errorTexts = [];
        for (let element in response.data.errors) {
            errorTexts.push(response.data.errors[element][0]);
        }

        type = 'error';
        message = errorTexts.join(',');

    } else if (response.status === 403) {
        type = 'error';
        message = response.data.message;
    }
    else if(!showSuccessMessage && response.status !== 200){
        type = 'error';
        message = response.message;
    } else if(response.status !== 200){
        type = 'error';
        message = response.message;
    }

    if (message != '') {
        
    }



}