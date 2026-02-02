// 站点数据示例，可以放100个站点
// 每个对象: {name: "站点名称", url: "https://example.com", category: "分类名称", desc: "描述信息"}
const sites = [
    {name: "站点1", url: "https://site1.com", category: "电影", desc: "电影站点示例"},
    {name: "站点2", url: "https://site2.com", category: "电影", desc: "电影站点示例"},
    {name: "站点3", url: "https://site3.com", category: "电影", desc: "电影站点示例"},
    // ...继续填充100个站点
];

// 获取所有分类
const categories = [...new Set(sites.map(s => s.category))];
