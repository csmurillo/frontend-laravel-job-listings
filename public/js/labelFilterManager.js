let filterArray=[];

let removeFilterItem = (item)=>{
    filterArray=Array.from(new Set(filterArray)).filter(items=>{
        return items!=item;
    });
    alert(filterArray);
};
let addFilterItem = (item)=>{
    filterArray.push(item);
    let arr=Array.from(new Set(filterArray));
    filterArray=arr;
    alert(filterArray);
};
let hello = ()=>{alert('hello');};
let filterQuery=()=>{
    return filterArray.join(", ");
};


console.log(filterQuery());
hello();
// test
// addFilterItem('one');
// addFilterItem('two');
// removeFilterItem('one');

// console.log(filterArray);
