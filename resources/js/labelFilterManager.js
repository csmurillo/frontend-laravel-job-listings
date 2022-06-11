let filterArray=[];


let removeFilterItem = (item)=>{
    filterArray.filter(items=>{
        console.log('items:');
        console.log(items);
        return items==item;
    });
};

let addFilterItem = (item)=>{
    filterArray.push(item);
};

let checkDuplicated = ()=>{};

addFilterItem('one');
addFilterItem('two');
removeFilterItem('one');

// console.log();