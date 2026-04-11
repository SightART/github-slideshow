import { useState } from "react";

export default function StudioWebsiteConcept() {
	const [formState, setFormState] = useState("idle");
	const projects = [
		{
			title: "Woonvilla in Zuid-Limburg",
			type: "Interieurconcept · maatwerk · materiaalplan",
			text: "Een warme, tijdloze woonbeleving met natuurlijke materialen, rustige lijnen en verfijnde details.",
		},
		{
			title: "Boutique kantooromgeving",
			type: "Werkplekconcept · routing · branding",
			text: "Een representatieve werkomgeving waarin sfeer, functionaliteit en merkidentiteit samenkomen.",
		},
		{
			title: "Keuken & leefruimte renovatie",
			type: "Verbouwing · lichtplan · styling",
			text: "Een open leefruimte met slimme indeling, zachte contrasten en een serene uitstraling.",
		},
	];

	const shopItems = [
		{ name: "Materiaalbox Naturel", price: "€49" },
		{ name: "Interieuradvies op afstand", price: "€195" },
		{ name: "Stalenpakket Warm Minimal", price: "€35" },
	];

	const handleSignUp = (event) => {
		event.preventDefault();
		setFormState("submitting");

		window.setTimeout(() => {
			setFormState("success");
		}, 1200);
	};

	return (
		<div className="min-h-screen bg-stone-50 text-stone-900">
			<header className="sticky top-0 z-20 border-b border-stone-200/80 bg-stone-50/90 backdrop-blur">
				<div className="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">
					<div>
						<div className="text-xs uppercase tracking-[0.35em] text-stone-500">
							Interieurarchitect
						</div>
						<div className="text-xl font-semibold">
							Studio Zuid-Limburg
						</div>
					</div>
					<nav className="hidden gap-8 text-sm text-stone-700 md:flex">
						<a href="#projecten" className="hover:text-black">
							Projecten
						</a>
						<a href="#aanpak" className="hover:text-black">
							Aanpak
						</a>
						<a href="#shop" className="hover:text-black">
							Shop
						</a>
						<a href="#contact" className="hover:text-black">
							Contact
						</a>
					</nav>
					<a
						href="#contact"
						className="rounded-2xl bg-stone-900 px-4 py-2 text-sm text-white shadow-sm"
					>
						Plan een kennismaking
					</a>
				</div>
			</header>

			<main>
				<section className="mx-auto grid max-w-7xl gap-10 px-6 py-20 md:grid-cols-2 md:py-28">
					<div className="flex flex-col justify-center">
						<div className="mb-4 text-xs uppercase tracking-[0.35em] text-stone-500">
							Rust · verfijning · functionaliteit
						</div>
						<h1 className="max-w-xl text-5xl font-semibold leading-tight md:text-6xl">
							Interieurs met karakter, rust en een
							vanzelfsprekende luxe.
						</h1>
						<p className="mt-6 max-w-xl text-lg leading-8 text-stone-600">
							Ik ontwerp woningen en zakelijke ruimtes waarin
							esthetiek en gebruik perfect in balans zijn. Van
							totaalconcept tot materiaaladvies en styling.
						</p>
						<div className="mt-8 flex flex-wrap gap-4">
							<a
								href="#projecten"
								className="rounded-2xl bg-stone-900 px-6 py-3 text-white shadow-sm"
							>
								Bekijk projecten
							</a>
							<a
								href="#shop"
								className="rounded-2xl border border-stone-300 px-6 py-3"
							>
								Ontdek de shop
							</a>
						</div>
					</div>
					<div className="rounded-[2rem] bg-gradient-to-br from-stone-200 via-stone-100 to-white p-4 shadow-sm">
						<div className="grid h-full min-h-[420px] grid-cols-2 gap-4 rounded-[1.5rem] bg-white/60 p-4">
							<div className="rounded-[1.5rem] bg-stone-300" />
							<div className="rounded-[1.5rem] bg-stone-200" />
							<div className="rounded-[1.5rem] bg-stone-100" />
							<div className="rounded-[1.5rem] bg-stone-400" />
						</div>
					</div>
				</section>

				<section className="border-y border-stone-200 bg-white">
					<div className="mx-auto grid max-w-7xl gap-6 px-6 py-10 md:grid-cols-3">
						{[
							[
								"Positionering",
								"Een duidelijke merkuitstraling die vertrouwen wekt en direct de juiste klant aanspreekt.",
							],
							[
								"Conversie",
								"Heldere call-to-actions die bezoekers uitnodigen om contact op te nemen of direct te kopen.",
							],
							[
								"Webshop",
								"Een elegante shop voor adviesproducten, stalenpakketten en zorgvuldig geselecteerde items.",
							],
						].map(([title, text]) => (
							<div
								key={title}
								className="rounded-[1.5rem] bg-stone-50 p-6 shadow-sm"
							>
								<h3 className="text-lg font-semibold">
									{title}
								</h3>
								<p className="mt-3 leading-7 text-stone-600">
									{text}
								</p>
							</div>
						))}
					</div>
				</section>

				<section
					id="projecten"
					className="mx-auto max-w-7xl px-6 py-20"
				>
					<div className="mb-10 flex items-end justify-between gap-6">
						<div>
							<div className="text-xs uppercase tracking-[0.35em] text-stone-500">
								Selectie
							</div>
							<h2 className="mt-2 text-3xl font-semibold md:text-4xl">
								Projecten die jouw signatuur laten spreken
							</h2>
						</div>
						<a
							href="#contact"
							className="hidden rounded-2xl border border-stone-300 px-5 py-3 md:inline-block"
						>
							Vraag een portfolio-presentatie aan
						</a>
					</div>
					<div className="grid gap-6 md:grid-cols-3">
						{projects.map((project) => (
							<article
								key={project.title}
								className="overflow-hidden rounded-[2rem] bg-white shadow-sm ring-1 ring-stone-200"
							>
								<div className="h-64 bg-stone-200" />
								<div className="p-6">
									<div className="text-sm text-stone-500">
										{project.type}
									</div>
									<h3 className="mt-2 text-xl font-semibold">
										{project.title}
									</h3>
									<p className="mt-3 leading-7 text-stone-600">
										{project.text}
									</p>
								</div>
							</article>
						))}
					</div>
				</section>

				<section id="aanpak" className="bg-stone-900 text-stone-50">
					<div className="mx-auto grid max-w-7xl gap-10 px-6 py-20 md:grid-cols-2">
						<div>
							<div className="text-xs uppercase tracking-[0.35em] text-stone-400">
								Werkwijze
							</div>
							<h2 className="mt-2 text-3xl font-semibold md:text-4xl">
								Van eerste gevoel naar een volledig uitgewerkt
								interieurconcept
							</h2>
						</div>
						<div className="grid gap-4">
							{[
								"Kennismaking en intake",
								"Concept, stijlrichting en indeling",
								"Materialen, kleuren en verlichting",
								"Presentatie, begeleiding en realisatie",
							].map((step, i) => (
								<div
									key={step}
									className="rounded-[1.5rem] border border-white/10 bg-white/5 p-5"
								>
									<div className="text-sm text-stone-400">
										Stap {i + 1}
									</div>
									<div className="mt-1 text-lg">{step}</div>
								</div>
							))}
						</div>
					</div>
				</section>

				<section id="shop" className="mx-auto max-w-7xl px-6 py-20">
					<div className="mb-10 max-w-2xl">
						<div className="text-xs uppercase tracking-[0.35em] text-stone-500">
							Webshop
						</div>
						<h2 className="mt-2 text-3xl font-semibold md:text-4xl">
							Een shop die jouw expertise omzet in schaalbare
							omzet
						</h2>
						<p className="mt-4 text-lg leading-8 text-stone-600">
							Verkoop digitale adviezen, stalenpakketten, curated
							objects of cadeaubonnen in dezelfde rustige
							merkbeleving als je portfolio.
						</p>
					</div>
					<div className="grid gap-6 md:grid-cols-3">
						{shopItems.map((item) => (
							<div
								key={item.name}
								className="rounded-[2rem] bg-white p-6 shadow-sm ring-1 ring-stone-200"
							>
								<div className="mb-5 h-56 rounded-[1.5rem] bg-stone-200" />
								<div className="flex items-start justify-between gap-4">
									<h3 className="text-lg font-semibold">
										{item.name}
									</h3>
									<div className="rounded-xl bg-stone-100 px-3 py-1 text-sm">
										{item.price}
									</div>
								</div>
								<button className="mt-5 w-full rounded-2xl bg-stone-900 px-5 py-3 text-white">
									Toevoegen aan aanvraag
								</button>
							</div>
						))}
					</div>
				</section>

				<section
					id="contact"
					className="border-t border-stone-200 bg-white"
				>
					<div className="mx-auto grid max-w-7xl gap-10 px-6 py-20 md:grid-cols-[1.2fr_0.8fr]">
						<div>
							<div className="text-xs uppercase tracking-[0.35em] text-stone-500">
								Call to action
							</div>
							<h2 className="mt-2 text-3xl font-semibold md:text-4xl">
								Klaar om jouw interieurverhaal sterk neer te
								zetten?
							</h2>
							<p className="mt-4 max-w-2xl text-lg leading-8 text-stone-600">
								Nodig bezoekers uit voor een vrijblijvend
								gesprek, een projectaanvraag of een eerste
								interieuradvies. Kort, helder en laagdrempelig.
							</p>
						</div>
						<div className="rounded-[2rem] bg-stone-50 p-6 shadow-sm ring-1 ring-stone-200">
							<div className="text-lg font-semibold">
								Vraag een kennismaking aan
							</div>
							<form
								className="mt-5 grid gap-3"
								onSubmit={handleSignUp}
							>
								<input
									className="rounded-2xl border border-stone-300 bg-white px-4 py-3 outline-none"
									placeholder="Naam"
									disabled={formState === "submitting"}
								/>
								<input
									className="rounded-2xl border border-stone-300 bg-white px-4 py-3 outline-none"
									placeholder="E-mail"
									disabled={formState === "submitting"}
								/>
								<textarea
									className="min-h-[120px] rounded-2xl border border-stone-300 bg-white px-4 py-3 outline-none"
									placeholder="Vertel kort iets over je project"
									disabled={formState === "submitting"}
								/>
								<button
									className="group relative overflow-hidden rounded-2xl bg-stone-900 px-5 py-3 text-white disabled:cursor-not-allowed disabled:opacity-80"
									type="submit"
									disabled={formState === "submitting"}
								>
									<span
										className={`block transition-all duration-300 ${
											formState === "submitting"
												? "-translate-y-6 opacity-0"
												: "translate-y-0 opacity-100"
										}`}
									>
										Verstuur aanvraag
									</span>
									<span
										className={`absolute inset-0 flex items-center justify-center transition-all duration-300 ${
											formState === "submitting"
												? "translate-y-0 opacity-100"
												: "translate-y-6 opacity-0"
										}`}
									>
										<span className="h-4 w-4 animate-spin rounded-full border-2 border-white/40 border-t-white" />
									</span>
								</button>
							</form>
							<div
								className={`grid transition-all duration-500 ${
									formState === "success"
										? "mt-4 grid-rows-[1fr] opacity-100"
										: "grid-rows-[0fr] opacity-0"
								}`}
								aria-live="polite"
							>
								<div className="overflow-hidden">
									<div className="rounded-2xl border border-emerald-200 bg-emerald-50 px-4 py-3 text-sm text-emerald-900">
										Bedankt! Je aanvraag is verstuurd. Je
										ontvangt binnen 48 uur een reactie.
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</main>
		</div>
	);
}
