<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Nicolas Fracchia",
    "jobTitle": "Full-Stack Software Developer",
    "url": "https://nicolasfracchia.com",
    "image": "https://nicolasfracchia.com/resume/public/profile.jpg",
    "description": "Full-Stack Developer with 10+ years of experience in custom e-commerce & reports development. Skilled in JavaScript, PHP, MySQL, and back-end optimization.",
    "telephone": "+1 (587) 437 - 2920",
    "email": "dev.nfracchia@gmail.com",
    "sameAs": [
      "https://www.linkedin.com/in/nicolasfracchia/"
    ],
    "workExperience": [
        @foreach ($experienceSM as $e)
            {
                "@context": "https://schema.org",
                "@type": "WorkExperience",
                "jobTitle": "{{ $e->position }}",
                "employer": {
                    "@type": "Organization",
                    "name": "{{ $e->company }}"
                },
                "description": "{{ $e->description }}",
                "startDate": "{{ $e->from }}",
                "endDate": "{{ $e->to }}"
            },
        @endforeach
        {}
    ],
    "educationalBackground": [
        @foreach ($educationSM as $e)
            {
                "@context": "https://schema.org",
                "@type": "EducationalOrganization",
                "name": "{{ $e->institution }}",
                "degree": "{{ $e->title }}",
                "areaOfStudy": "{{ ($e->institution) == 'LAL Language Centres' ? 'English Language' : 'Software Development' }}"
            },
        @endforeach
        {}
    ]
  }
</script>