import React, { useEffect } from 'react';
import ReactDOM from 'react-dom';

function Card({job,addFilterItem}) {
    
    return (
       <div className={"relative px-4 pt-7 pb-4 mb-8 bg-white rounded lg:flex lg:flex-row shadow-xl " + (job.featured?'border-l-4 border-desDarkCyan':'')}>
             <div class="absolute left-5 -top-5 lg:relative lg:left-0 lg:top-0 lg:flex lg:justify-center lg:items-center lg:mr-5">
                <img class="w-10 h-10 lg:w-28 lg:h-28" src={job.logo}/>
            </div>
            <div class="flex flex-1 flex-col lg:justify-between lg:flex-row">
                <div class="border-b border-darkGrayCyan lg:flex lg:items-center lg:border-0">
                    <div>
                        <div class="flex gap-4 mb-2">
                            <p class="text-desDarkCyan font-leagueSpartan font-bold text-sm flex self-center">{job.company}</p>
                            {
                                job.new && <p class="bg-desDarkCyan rounded-3xl text-white text-center text-xs font-leagueSpartan py-1 px-2">NEW!</p>
                            }
                            {
                                job.featured && <span class="bg-veryDarkGrayCyan rounded-3xl text-white text-xs font-leagueSpartan py-1 px-2 text-center">FEATURED</span>
                            }
                        </div>
                        <div class="mb-2">
                            <p class="font-leagueSpartan font-bold text-sm">{job.position}</p>
                        </div>
                        <div class="flex mb-4 lg:mb-0">
                            <span class="text-darkGrayCyan font-medium text-xs">{job.postedAt}</span>
                            <ul class="flex list-disc">
                                <li class="text-darkGrayCyan font-medium text-xs ml-5">{job.contract}</li>
                                <li class="text-darkGrayCyan font-medium text-xs ml-5">{job.location}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap gap-3 pt-4 items-center lg:pt-0 lg:w-auto w-[75%]">
                    <button onClick={()=>{addFilterItem(job.role)}}>
                        <span class="cursor-pointer py-1 px-2 bg-lightGrayCyanBg text-desDarkCyan font-leagueSpartan font-bold rounded-lg text-sm hover:bg-desDarkCyan hover:text-white">{job.role}</span>
                    </button>
                    <button onClick={()=>{addFilterItem(job.level)}}> 
                        <span class="cursor-pointer	py-1 px-2 bg-lightGrayCyanBg text-desDarkCyan font-leagueSpartan font-bold rounded-lg text-sm hover:bg-desDarkCyan hover:text-white">{job.level}</span>
                    </button>
                    {
                        job.tools.map(tool=>
                            <button onClick={()=>{addFilterItem(tool)}}>    
                                <span class="cursor-pointer	py-1 px-2 bg-lightGrayCyanBg text-desDarkCyan font-leagueSpartan font-bold rounded-lg text-sm hover:bg-desDarkCyan hover:text-white">{tool}</span>
                            </button>
                        )
                    }
                    {
                        job.languages.map(language=>
                            <button onClick={()=>{addFilterItem(language)}}>
                                <span class="cursor-pointer	py-1 px-2 bg-lightGrayCyanBg text-desDarkCyan font-leagueSpartan font-bold rounded-lg text-sm hover:bg-desDarkCyan hover:text-white">{language}</span>
                            </button>    
                        )
                    }
                </div>
            </div>
       </div>
    );
}

export default Card;

if (document.getElementById('card')) {
    ReactDOM.render(<Card />, document.getElementById('card'));
}



