<router-link tag="h3" :to="{name: 'documentation'}" class="cursor-pointer flex items-center font-normal dim text-white mb-6 text-base no-underline">
    <svg class="sidebar-icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="256.61px" height="256.61px" viewBox="0 0 256.61 256.61"
         xml:space="preserve">
<g>
    <g id="_x38_7_36_">
        <g>
            <path fill="var(--sidebar-icon)" d="M60.859,112.533c-6.853,0-6.853,10.646,0,10.646c27.294,0,54.583,0,81.875,0c6.865,0,6.865-10.646,0-10.646
				C115.442,112.533,88.153,112.533,60.859,112.533z"/>
            <path  fill="var(--sidebar-icon)"d="M142.734,137.704c-27.292,0-54.581,0-81.875,0c-6.853,0-6.853,10.634,0,10.634c27.294,0,54.583,0,81.875,0
				C149.6,148.338,149.6,137.704,142.734,137.704z"/>
            <path  fill="var(--sidebar-icon)"d="M142.734,161.018c-27.292,0-54.581,0-81.875,0c-6.853,0-6.853,10.633,0,10.633c27.294,0,54.583,0,81.875,0
				C149.6,171.65,149.6,161.018,142.734,161.018z"/>
            <path  fill="var(--sidebar-icon)" d="M142.734,186.184c-27.292,0-54.581,0-81.875,0c-6.853,0-6.853,10.629,0,10.629c27.294,0,54.583,0,81.875,0
				C149.6,196.812,149.6,186.184,142.734,186.184z"/>
            <path fill="var(--sidebar-icon)"  d="M141.17,209.934c-27.302,0-54.601,0-81.89,0c-6.848,0-6.848,10.633,0,10.633c27.289,0,54.588,0,81.89,0
				C148.015,220.566,148.015,209.934,141.17,209.934z"/>
            <path  fill="var(--sidebar-icon)" d="M25.362,58.087V256.61h152.877V85.63l-28.406-27.543H25.362z M165.026,243.393H38.585V71.305h104.443v20.97h21.988 v151.118H165.026z"/>
            <polygon  fill="var(--sidebar-icon)" points="51.204,27.667 51.204,50.645 64.427,50.645 64.427,40.88 168.875,40.88 168.875,61.85 190.868,61.85
				190.868,212.971 185.059,212.971 185.059,226.188 204.086,226.188 204.086,55.205 175.68,27.667 			"/>
            <polygon  fill="var(--sidebar-icon)" points="202.837,0 78.363,0 78.363,22.983 91.581,22.983 91.581,13.218 196.032,13.218 196.032,34.188 218.025,34.188 218.025,185.306 212.221,185.306 212.221,198.523 231.248,198.523 231.248,27.543"/>
        </g>
    </g>
</g>
</svg>
    <span class="sidebar-label">
        {{ config('novadocumentation.title') }}
    </span>
</router-link>
@can('viewAny', \Dniccum\NovaDocumentation\Model\Documentation::class)
<ul class="list-reset mb-8">
    <li class="leading-wide mb-4 text-sm">
        <router-link :to="{
            name: 'index',
            params: {
                resourceName: 'documentations'
            }
        }" class="text-white ml-8 no-underline dim">
            文档管理
        </router-link>
    </li>
</ul>
@endcan
