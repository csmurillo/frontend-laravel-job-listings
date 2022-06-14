import React, { useState, useEffect } from 'react';
import ReactDOM from 'react-dom';
import Header from './Header';
import Card from './Card';
import Filters from './Filters';
import {getJobs} from '../adapters/jobsApi';

function Home() {

    const [jobs,setJobs]=useState([]);
    const [filterLabels,setFilterLabels]=useState([]);

    useEffect(()=>{
        getJobs()
            .then(jobs=>{
                setJobs(jobs);
            });
    },[]);

    useEffect(()=>{
        let query="?filters="+filterLabels.join(",").toString();
        getJobs(query)
            .then(jobs=>{
                setJobs(jobs);
            });
    },[filterLabels]);

    let removeFilterItem = (item)=>{
        let filteredLabels=Array.from(new Set(filterLabels)).filter(items=>{
            return items!=item;
        });
        setFilterLabels(filteredLabels);
    };

    let addFilterItem = (item)=>{
        filterLabels.push(item);
        let addedFilterLabels=Array.from(new Set(filterLabels));
        setFilterLabels(addedFilterLabels);
    };
    let clearFilter=()=>{
        setFilterLabels([]);
    }

    return (
        <>
            <Header/>
            {
                filterLabels.length>0 &&
                <div className='relative px-5 w-full -mt-10'>
                    <Filters filterLabels={filterLabels} removeFilterItem={removeFilterItem} clearFilter={clearFilter}/>
                </div>
            }
            <div className="relative px-5 pt-12 pb-4 w-full h-full">
                {
                    jobs && jobs.map((job,index)=>
                        <Card id={index} job={job} addFilterItem={addFilterItem}></Card>
                    )
                }
            </div>
        </>
    );
}

export default Home;

if (document.getElementById('home')) {
    ReactDOM.render(<Home />, document.getElementById('home'));
}

