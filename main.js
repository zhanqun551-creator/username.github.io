// 随机数生成函数
function rand(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

// 生成随机样本链接
function genSamples(site, count = 3) {
  const samples = new Set();

  while (samples.size < count) {
    const id = rand(site.content.min, site.content.max);
    samples.add(
      `${site.home}${site.content.dir}/${id}.html`
    );
  }

  return [...samples];
}
