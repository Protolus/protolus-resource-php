Protolus = {};
Protolus.packages = {};
Protolus.loaded = {};
Protolus.preregister = function(name, value){
    Protolus.loaded[name] = value;
};
Protolus.register = function(name, value){
    Protolus.packages[name] = value;
    return value;
};
Protolus.require = function(name){
    if(Protolus.packages[name]) return Protolus.packages[name];
    if(Protolus.loaded[name]) return Protolus.register(name, Protolus.loaded[name]());
    if(!Protolus.silent) throw('package not available!');
    else return (function(){});
};