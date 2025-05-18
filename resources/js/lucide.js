import { createIcons, LogOut, CircleUser, Package, UserRound, LayoutDashboard, GraduationCap, CarFront } from 'lucide';

document.addEventListener('livewire:navigated', () => {
    createIcons({
        icons: {
            LogOut,
            CircleUser,
            Package,
            UserRound,
            LayoutDashboard,
            GraduationCap,
            CarFront
        },
        attrs: {
            'stroke-width': 1.5,
        },
    });
})

