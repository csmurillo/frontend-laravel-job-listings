export const getJobs = (params="")=>{
    return fetch('http://localhost:8000/api/jobs'+params,{
        method:"GET",
        headers:{
            Accept:'application/json',
            'Content-Type':'application/json'
        }
    })
    .then(res=>{return res.json()})
    .catch(err=>{console.log(err);})
};



