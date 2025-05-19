import { createIcons,
    LogOut,
    CircleUser,
    ChevronUp,
    ChevronDown,
    Package,
    UserRound,
    LayoutDashboard,
    GraduationCap,
    CarFront,
    Cog,
    Search,
    Plus
} from 'lucide';

document.addEventListener('livewire:navigated', () => {
    createIcons({
        icons: {
            LogOut,
            CircleUser,
            Package,
            UserRound,
            LayoutDashboard,
            GraduationCap,
            CarFront,
            Cog,
            ChevronUp,
            ChevronDown,
            Search,
            Plus
        },
        attrs: {
            'stroke-width': 1.5,
        },
    });
})

