import PageRoutes    from './page.js'
import ElementRoutes from './element.js'
import WidgetRoutes  from './widget.js'
import LayoutRoutes  from './layout.js'
import SectionRoutes from './section.js'


export default [
	...PageRoutes,
	...ElementRoutes,
	...WidgetRoutes,
	...LayoutRoutes,
	...SectionRoutes,
]