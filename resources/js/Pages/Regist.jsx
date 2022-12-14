import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head } from "@inertiajs/inertia-react";

export default function Regist(props) {
    return (
        <div className="flex justify-center items-center min-h-screen bg-emerald-900 text-red text-2xl">
            <div className="bg-gray-50 rounded-xl">
                <div className="  max-w-7xl py-12 px-4 sm:px-6 lg:flex flex-col lg:items-start lg:py-16 lg:px-8">
                    <p className="flow-root font-bold tracking-tight text-green-800">
                        <span class="block text-5xl mb-5">Register</span>
                    </p>

                    <div class="flex">
                        <div class="mb-3 xl:w-96">
                            <label
                                for="Role"
                                class="form-label inline-block mb-2 text-green-500 font-bold tracking-tight"
                            >
                                Role
                            </label>
                            <select
                                type="email"
                                class="
                                    form-control
                                    block
                                    w-full
                                    rounded-lg
                                    mb-3
                                    px-4
                                    py-5
                                    text-base
                                    font-normal
                                    text-white
                                    bg-emerald-200 bg-clip-padding
                                    transition
                                    ease-in-out
                                    m-0
                                    drop-shadow-md
                                    focus:text-white focus:bg-emerald-300 border-transparent focus:border-transparent focus:ring-0
                                    placeholder-white placeholder-font-bold"
                                id="email"
                                placeholder="Choose Role"
                            >
                                <option value="1">Mahasiswa</option>
                                <option value="2">Dosen</option>
                            </select>
                            <label
                                for="email"
                                class="form-label inline-block mb-2 text-green-500 font-bold tracking-tight"
                            >
                                Email Address
                            </label>
                            <input
                                type="email"
                                class="
                                    form-control
                                    block
                                    w-full
                                    rounded-lg
                                    mb-3
                                    px-4
                                    py-5
                                    text-base
                                    font-normal
                                    text-white
                                    bg-emerald-200 bg-clip-padding
                                    transition
                                    ease-in-out
                                    m-0
                                    drop-shadow-md
                                    focus:text-white focus:bg-emerald-300 border-transparent focus:border-transparent focus:ring-0
                                    placeholder-white placeholder-font-bold"
                                id="email"
                                placeholder="Email Address"
                            />
                            <label
                                for="password"
                                class="form-label inline-block mb-2 text-green-500 font-bold tracking-tight"
                            >
                                Password
                            </label>
                            <input
                                type="password"
                                class="
                                    form-control
                                    block
                                    w-full
                                    rounded-lg
                                    mb-3
                                    px-4
                                    py-5
                                    text-base
                                    font-normal
                                    text-white
                                    bg-emerald-200 bg-clip-padding
                                    
                                    transition
                                    ease-in-out
                                    m-0
                                    drop-shadow-md
                                    focus:text-white focus:bg-emerald-300 border-transparent focus:border-transparent focus:ring-0
                                    placeholder-white placeholder-font-bold"
                                id="password"
                                placeholder="password"
                            />
                        </div>
                    </div>
                    <div class="flex flex-col flex-shrink-0 mx-auto">
                        <div class="inline-flex rounded-md mx-auto justify-center shadow">
                            <a
                                href="/"
                                class="inline-flex items-center justify-center rounded-md border border-transparent bg-emerald-400 px-5 py-3 text-base font-medium text-white hover:bg-emerald-500"
                            >
                                Next
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-row mx-auto">
                        <p class="text-green-600 mb-5 text-lg">
                            Already have an account?{" "}
                            <a
                                href="/hello"
                                class="text-green-600 mb-5 text-lg underline"
                            >
                                Login
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    );
}
