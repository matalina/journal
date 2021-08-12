import axios from 'axios';

export default {
    base_path: `${window.base_path}/api/`,

    send(verb, path, data = null, with_files = false) {
        let headers = {
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json'
        };

        if (with_files) {
            headers['Content-Type'] = 'multipart/form-data';
        }
        
        return axios({
            url: path,
            method: verb,
            baseURL: this.base_path,
            headers,
            data,
        })
    },
    /*download(path, data, title = false) {

        return axios({
            url: path,
            method: 'post',
            responseType: 'blob', // important
            baseURL: this.base_path,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json',
            },
            data,
        })
            .then((response) => {
                const url = window.URL.createObjectURL(new Blob([response.data]));
                const link = document.createElement('a');
                link.href = url;
                let name;
                if(title) {
                    let parts = data.filename.split('.');
                    name = data.name + '.' + parts[parts.length - 1];
                }
                else {
                    name = data.filename;
                }
                link.setAttribute('download', name);
                document.body.appendChild(link);
                link.click();
            });
    }*/
}
