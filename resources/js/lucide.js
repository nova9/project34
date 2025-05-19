import { createIcons, LogOut, CircleUser, Package, UserRound, LayoutDashboard, GraduationCap, CarFront, Cog } from 'lucide';

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
            Cog
        },
        attrs: {
            'stroke-width': 1.5,
        },
    });
})

