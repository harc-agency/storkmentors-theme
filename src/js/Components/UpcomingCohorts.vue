<template>
<section>
  <div class="container m-auto text-center my-20 ">
    <h2
      class="mb-10 text-3xl">
      Upcoming Cohorts
    </h2>
    <div class="overflow-x-auto grid place-items-center">
      <table class="table table-zebra table-md ">
        <thead>
          <tr >
            <th>Start Date</th>
            <th>6 Months Intensive</th>
            <th>6 Months Support</th>
            <th>Tuition</th>
            <th>Enroll By</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="cohort in cohorts" :key="cohort.start_date">
            <td>{{ cohort.start_date }}</td>
            <td>{{ cohort.intensive }}</td>
            <td>{{ cohort.support }}</td>
            <td>{{ cohort.tuition }}</td>
            <td>{{ cohort.enroll_by }}</td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- apply btn -->
    <div class="mt-5 flex justify-center pb-20">
      <Link as="a"
            href="/"
            class="btn btn-outline btn-wide px-10 py-0">
        Apply
      </Link>
    </div>
  </div>
</section>
</template>

<script setup>
// cohorts, when the time comes make props available
const cohorts = [
    {
        start_date: "Aug 6",
        intensive: "Aug 6 - Feb 3",
        support: "Feb 4 - Aug 3",
        tuition: "$10,900",
        enroll_by: "July 30"
    },
    {
        start_date: "Oct 1",
        intensive: "Oct 1 - Mar 30",
        support: "Mar 31 - Sep 30",
        tuition: "$10,900",
        enroll_by: "Sep 29"
    },
    {
        start_date: "Dec 3",
        intensive: "Dec 3 - May 31",
        support: "Jun 1 - Dec 1",
        tuition: "$10,900",
        enroll_by: "Dec 2"
    }
]
</script>

<style scoped>
</style>