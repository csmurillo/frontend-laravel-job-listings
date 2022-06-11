import React from 'react';
import ReactDOM from 'react-dom';

function Filters({filterLabels,removeFilterItem,clearFilter}) {
    return (
        <div className="px-5 py-4 relative w-full bg-white rounded flex justify-between items-center min-h-[5.5rem]">
            <div className='flex flex-wrap gap-2 w-[80%]'>
                {
                    filterLabels && filterLabels.map((filters,index)=>
                        <div id={index}  className='flex'>
                            <p className='py-1 px-2 bg-lightGrayCyanBg text-desDarkCyan font-leagueSpartan font-bold rounded-l-md text-sm flex items-center'>{filters}</p>
                            <button className='py-1 px-2 bg-desDarkCyan text-white font-leagueSpartan font-bold rounded-r-md text-sm flex items-center' onClick={()=>{removeFilterItem(filters);}}>&#10005;</button>
                        </div>
                    )
                }
            </div>
            <div>
                <button onClick={()=>{clearFilter()}} className="text-darkGrayCyan font-medium text-sm hover:underline hover:text-desDarkCyan">Clear</button>
            </div>
        </div>
    );
}

export default Filters;

if (document.getElementById('filters')) {
    ReactDOM.render(<Filters />, document.getElementById('filters'));
}

