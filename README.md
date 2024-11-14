

[![Anurag's GitHub stats](https://github-readme-stats.vercel.app/api?username=danilph)](https://github.com/danilph/github-readme-stats)


php artisan create:resources Alumni --table-exists  --table-name=dit_site_alumni --with-form-request --translation-for=en,sw --routes-prefix=alumni   --controller-directory=web --layout-name=layouts.web --views-directory=dit_site_alumni --force


php artisan create:resources Alumni --table-exists  --table-name=dit_site_alumni --with-auth --with-form-request --translation-for=en,sw --routes-prefix=admin   --controller-directory=Admin --layout-name=layouts.master --views-directory=dit_site_alumni  --force


php artisan create:resources  Experience --table-exists  --table-name=dit_site_experience --with-auth --with-form-request --translation-for=en,sw --routes-prefix=admin   --controller-directory=Admin --layout-name=layouts.master --views-directory=dit_site_experience  --force
